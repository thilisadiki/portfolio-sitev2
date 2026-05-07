<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

function load_env(string $path): array {
    $env = [];
    if (!is_readable($path)) return $env;
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if ($line === '' || $line[0] === '#') continue;
        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) continue;
        $key = trim($parts[0]);
        $val = trim($parts[1]);
        if ((str_starts_with($val, '"') && str_ends_with($val, '"')) ||
            (str_starts_with($val, "'") && str_ends_with($val, "'"))) {
            $val = substr($val, 1, -1);
        }
        $env[$key] = $val;
    }
    return $env;
}

$env = load_env(__DIR__ . '/.env');
$apiKey = $env['RESEND_API_KEY'] ?? '';
$to     = $env['CONTACT_TO']     ?? '';
$from   = $env['CONTACT_FROM']   ?? '';

if ($apiKey === '' || $to === '' || $from === '') {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Server not configured']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) $data = $_POST;

$honeypot = trim((string)($data['url']     ?? ''));
$elapsed  = (int)         ($data['elapsed'] ?? 0);
if ($honeypot !== '' || $elapsed < 2000) {
    echo json_encode(['ok' => true]);
    exit;
}

$name    = trim((string)($data['name']    ?? ''));
$email   = trim((string)($data['email']   ?? ''));
$company = trim((string)($data['company'] ?? ''));
$service = trim((string)($data['service'] ?? ''));
$message = trim((string)($data['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Missing required fields']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Invalid email address']);
    exit;
}
if (strlen($name) > 200 || strlen($email) > 200 || strlen($company) > 200
    || strlen($service) > 200 || strlen($message) > 8000) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Field too long']);
    exit;
}

$subject = 'New contact: ' . $name . ($company !== '' ? ' (' . $company . ')' : '');

$textBody = "New contact form submission\n"
    . "----------------------------------------\n\n"
    . "Name:    $name\n"
    . "Email:   $email\n"
    . "Company: " . ($company !== '' ? $company : '—') . "\n"
    . "Service: " . ($service !== '' ? $service : '—') . "\n\n"
    . "Message:\n$message\n";

$esc = fn(string $s) => htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$htmlBody = '<div style="font-family:system-ui,sans-serif;font-size:14px;color:#141210;">'
    . '<h2 style="margin:0 0 16px;font-size:16px;">New contact form submission</h2>'
    . '<table style="border-collapse:collapse;font-size:14px;">'
    . '<tr><td style="padding:4px 12px 4px 0;color:#666;">Name</td><td>' . $esc($name) . '</td></tr>'
    . '<tr><td style="padding:4px 12px 4px 0;color:#666;">Email</td><td><a href="mailto:' . $esc($email) . '">' . $esc($email) . '</a></td></tr>'
    . '<tr><td style="padding:4px 12px 4px 0;color:#666;">Company</td><td>' . $esc($company !== '' ? $company : '—') . '</td></tr>'
    . '<tr><td style="padding:4px 12px 4px 0;color:#666;">Service</td><td>' . $esc($service !== '' ? $service : '—') . '</td></tr>'
    . '</table>'
    . '<h3 style="margin:24px 0 8px;font-size:14px;">Message</h3>'
    . '<div style="white-space:pre-wrap;line-height:1.5;">' . $esc($message) . '</div>'
    . '</div>';

$payload = json_encode([
    'from'     => $from,
    'to'       => [$to],
    'reply_to' => $email,
    'subject'  => $subject,
    'text'     => $textBody,
    'html'     => $htmlBody,
]);

$ch = curl_init('https://api.resend.com/emails');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
    ],
    CURLOPT_TIMEOUT        => 15,
]);
$response = curl_exec($ch);
$status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr  = curl_error($ch);
curl_close($ch);

if ($response === false || $status >= 400) {
    error_log('Resend send failed: status=' . $status . ' err=' . $curlErr . ' body=' . $response);
    http_response_code(502);
    echo json_encode(['ok' => false, 'error' => 'Email delivery failed']);
    exit;
}

echo json_encode(['ok' => true]);
