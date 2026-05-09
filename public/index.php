<?php
function e(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
$services   = require __DIR__ . '/data/services.php';
$expertise  = require __DIR__ . '/data/expertise.php';
$industries = require __DIR__ . '/data/industries.php';
$projects   = require __DIR__ . '/data/projects.php';
$insights   = require __DIR__ . '/data/insights.php';

$skills = [
    ['JavaScript SEO', 'Rendering'],
    ['Core Web Vitals', 'Performance'],
    ['Search Rendering Diagnostics', 'Indexation'],
    ['Log File Analysis', 'Crawl'],
    ['Structured Data / JSON-LD', 'Schema'],
    ['Crawl Budget Optimisation', 'Crawl'],
    ['Site Architecture', 'Information'],
    ['Next.js / Nuxt SEO', 'Frameworks'],
    ['Google Search Console', 'Analytics'],
    ['Local SEO / GBP', 'Local'],
    ['Python for SEO', 'Automation'],
    ['Technical Auditing', 'Diagnostics'],
];

$tabs = ['About', 'Services', 'Expertise', 'Industries', 'Work', 'Insights'];
$tabAnchors = [
    'About' => '#about', 'Services' => '#services', 'Expertise' => '#expertise',
    'Industries' => '#industries', 'Work' => '#work', 'Insights' => '#insights',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jason Sadiki: Technical SEO &amp; Web Performance Engineer | South Africa</title>
  <meta name="description" content="Senior Technical SEO specialist and web performance engineer based in South Africa. Expert in JavaScript SEO, Core Web Vitals, search rendering diagnostics, and modern web architecture." />
  <meta name="author" content="Jason Sadiki" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://thilisadiki.dev/" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />

  <meta property="og:title" content="Jason Sadiki: Technical SEO &amp; Web Performance Engineer" />
  <meta property="og:description" content="Senior Technical SEO specialist based in South Africa. JavaScript SEO, Core Web Vitals, search rendering, site architecture." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://thilisadiki.dev/" />
  <meta property="og:locale" content="en_ZA" />
  <meta property="og:image" content="https://thilisadiki.dev/og-image.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Jason Sadiki: Technical SEO &amp; Web Performance Engineer" />
  <meta name="twitter:description" content="Senior Technical SEO specialist based in South Africa." />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Person",
        "@id": "https://thilisadiki.dev/#person",
        "name": "Jason Sadiki",
        "jobTitle": "Technical SEO Engineer & Web Performance Specialist",
        "description": "Senior Technical SEO specialist and web performance engineer based in South Africa, specialising in JavaScript SEO, Core Web Vitals optimisation, search rendering diagnostics, and site architecture.",
        "url": "https://thilisadiki.dev/",
        "email": "jason@thilisadiki.dev",
        "address": { "@type": "PostalAddress", "addressLocality": "Johannesburg", "addressCountry": "ZA" },
        "knowsAbout": ["Technical SEO","JavaScript SEO","Core Web Vitals","Web Performance","Search Rendering","Crawl Optimisation","Structured Data","Log File Analysis","Site Architecture","Local SEO"],
        "sameAs": ["https://www.linkedin.com/in/jasonsadiki/","https://github.com/thilisadiki/"]
      },
      {
        "@type": "WebSite",
        "@id": "https://thilisadiki.dev/#website",
        "url": "https://thilisadiki.dev/",
        "name": "Jason Sadiki",
        "author": { "@id": "https://thilisadiki.dev/#person" }
      },
      {
        "@type": "ProfessionalService",
        "@id": "https://thilisadiki.dev/#service",
        "name": "Jason Sadiki: Technical SEO Consulting",
        "provider": { "@id": "https://thilisadiki.dev/#person" },
        "areaServed": ["ZA","GB","US","AU"],
        "serviceType": "Technical SEO & Web Performance Consulting"
      }
    ]
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,400;8..144,500;8..144,600&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/tokens.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/buttons.css" />
  <link rel="stylesheet" href="css/chips.css" />
  <link rel="stylesheet" href="css/appbar.css" />
  <link rel="stylesheet" href="css/hero.css" />
  <link rel="stylesheet" href="css/section-head.css" />
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/services.css" />
  <link rel="stylesheet" href="css/expertise.css" />
  <link rel="stylesheet" href="css/industries.css" />
  <link rel="stylesheet" href="css/projects.css" />
  <link rel="stylesheet" href="css/insights.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="css/fab.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>

<!-- ══════════════════════════════════════════════════════════
     APP BAR
══════════════════════════════════════════════════════════ -->
<header class="appbar" role="banner">
  <div class="appbar-row">
    <a href="#" class="brand" aria-label="Jason Sadiki">
      <span class="brand-mark">JS</span>
      <span class="brand-text">Jason <em>Sadiki</em></span>
    </a>
    <nav class="appbar-tabs" role="navigation" aria-label="Main navigation">
      <?php foreach ($tabs as $t): ?>
        <a href="<?= e($tabAnchors[$t]) ?>" class="appbar-tab" data-tab="<?= e(strtolower($t)) ?>"><?= e($t) ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="appbar-actions">
      <div class="theme-switch" role="group" aria-label="Theme">
        <button class="theme-dot" data-theme="violet" aria-label="Violet theme" style="background:#6750A4; color:#6750A4;"></button>
        <button class="theme-dot is-active" data-theme="ocean"  aria-label="Ocean theme"  style="background:#0061A4; color:#0061A4;"></button>
        <button class="theme-dot" data-theme="citrus" aria-label="Citrus theme" style="background:#7A5900; color:#7A5900;"></button>
        <button class="theme-dot" data-theme="forest" aria-label="Forest theme" style="background:#386A20; color:#386A20;"></button>
      </div>
      <a href="#contact" class="btn btn-filled appbar-cta">Start a project</a>
      <button class="appbar-burger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
  <nav id="mobile-menu" class="appbar-mobile" aria-label="Mobile navigation">
    <?php foreach ($tabs as $t): ?>
      <a href="<?= e($tabAnchors[$t]) ?>"><?= e($t) ?></a>
    <?php endforeach; ?>
    <a href="#contact" class="btn btn-filled">Start a project</a>
  </nav>
</header>

<main>

<!-- ══════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════ -->
<section id="hero" class="hero" aria-labelledby="hero-h1">
  <div class="hero-card">
    <div class="hero-meta">
      <span class="chip"><span class="chip-dot" aria-hidden="true"></span>Available · Q3 2026</span>
      <span class="chip tonal">GMT+2 · Johannesburg</span>
      <span class="chip tonal">8+ years</span>
    </div>
    <h1 id="hero-h1" class="hero-h1">Search is an <em>engineering</em> problem.</h1>
    <div class="hero-actions-row">
      <a href="#work" class="btn btn-filled btn-large">View case studies</a>
      <a href="#contact" class="btn btn-text btn-large">Start a conversation →</a>
    </div>
  </div>
  <div class="hero-grid">
    <div class="hero-desc-card">
      <p>I help companies build web experiences that are <strong>genuinely discoverable</strong>, through precise technical work at the intersection of search systems and modern web architecture.</p>
    </div>
    <div class="hero-stats-card">
      <div class="stats-grid">
        <div class="stat">
          <div class="stat-num"><span data-count="8">0</span><span class="suf">+</span></div>
          <div class="stat-lbl">years in SEO</div>
        </div>
        <div class="stat">
          <div class="stat-num"><span data-count="60">0</span><span class="suf">+</span></div>
          <div class="stat-lbl">engagements</div>
        </div>
        <div class="stat">
          <div class="stat-num"><span data-count="340">0</span><span class="suf">%</span></div>
          <div class="stat-lbl">avg organic uplift</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     ABOUT
══════════════════════════════════════════════════════════ -->
<section id="about" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● About</span>
    <h2 class="sec-title">SEO grew up. <em>Most practitioners didn't.</em></h2>
    <p class="sec-sub">Why I crossed from keyword research into rendering pipelines and crawl engineering, and what changed when I did.</p>
  </div>
  <div class="about-grid">
    <div class="about-card">
      <p class="lead">I started where most SEOs do: keyword research, on-page fundamentals, link building. That foundation mattered. But I kept watching the real problems compound at a layer those tools couldn't reach.</p>
      <p>JavaScript frameworks became the dominant way to build for the web. Googlebot's rendering pipeline became a genuine engineering concern. The gap between what a user sees and what a search engine indexes grew into a business-critical problem, and almost no one in SEO was equipped to diagnose it properly.</p>
      <p>So I crossed that gap deliberately. I learned how the Web Rendering Service actually works, how crawl budgets are allocated, how Core Web Vitals are measured in field data versus lab conditions. Not to pass a certification, but because the problems required it.</p>
      <p>Today I work at the intersection of search visibility and web engineering. I can diagnose why your Next.js app isn't being indexed, trace a CLS regression to a specific component, or redesign a URL taxonomy that's cannibalising itself, and explain it to both your CTO and your marketing director.</p>
    </div>
    <aside class="skills-card" aria-label="Technical focus areas">
      <div class="skills-head">
        <h3>Focus areas</h3>
        <span class="skills-count"><?= count($skills) ?> / <?= count($skills) ?></span>
      </div>
      <div class="skill-chips">
        <?php foreach ($skills as [$name, $cat]): ?>
          <div class="skill-chip">
            <span class="skill-chip-name"><?= e($name) ?></span>
            <span class="skill-chip-cat"><?= e($cat) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </aside>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════════════════ -->
<section id="services" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● Services</span>
    <h2 class="sec-title">What I do, and how I <em>approach it.</em></h2>
    <p class="sec-sub">Each engagement starts with diagnosis, not templates. Tap a card to expand.</p>
  </div>
  <div class="svc-grid">
    <?php foreach ($services as $i => $s): ?>
      <button type="button" class="svc-card<?= $i === 0 ? ' is-open' : '' ?>" data-svc="<?= $i ?>" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
        <div class="svc-icon"><?= sprintf('%02d', $i + 1) ?></div>
        <h3><?= e($s['title']) ?></h3>
        <div class="svc-tags">
          <?php foreach ($s['methods'] as $m): ?>
            <span class="svc-tag"><?= e($m) ?></span>
          <?php endforeach; ?>
        </div>
        <div class="svc-detail-wrap" hidden>
          <p class="svc-detail"><?= e($s['description']) ?></p>
          <div class="svc-deliv">
            <span class="svc-deliv-k">DELIVERABLE</span>
            <span class="svc-deliv-v"><?= e($s['deliverable']) ?></span>
          </div>
        </div>
      </button>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     EXPERTISE
══════════════════════════════════════════════════════════ -->
<section id="expertise" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● Expertise</span>
    <h2 class="sec-title">Technical depth across the full <em>search stack.</em></h2>
    <p class="sec-sub">Not a list of certifications. The actual layers of search engineering I work at, mapped to the problems they solve.</p>
  </div>
  <div class="exp-grid">
    <?php foreach ($expertise as $i => $d): ?>
      <article class="exp">
        <span class="exp-num"><?= sprintf('%02d', $i + 1) ?></span>
        <h3><?= e($d['title']) ?></h3>
        <p class="exp-desc"><?= e($d['description']) ?></p>
        <ul class="exp-items">
          <?php foreach ($d['items'] as $item): ?>
            <li class="exp-item-chip"><?= e($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     INDUSTRIES
══════════════════════════════════════════════════════════ -->
<section id="industries" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● Industries</span>
    <h2 class="sec-title">Verticals I know <em>from the inside out.</em></h2>
    <p class="sec-sub">Search behaves very differently across compliance regimes, content models, and competitive intensity. Here's where I have direct, repeated experience.</p>
  </div>
  <div class="ind-grid">
    <?php foreach ($industries as $ind): ?>
      <article class="ind">
        <div class="ind-head">
          <h3><?= e($ind['title']) ?></h3>
          <span class="ind-sub"><?= e($ind['subtitle']) ?></span>
        </div>
        <p class="ind-desc"><?= e($ind['description']) ?></p>
        <ul class="ind-signals">
          <?php foreach ($ind['signals'] as $sig): ?>
            <li><span class="ind-bullet" aria-hidden="true"></span><?= e($sig) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     WORK
══════════════════════════════════════════════════════════ -->
<section id="work" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● Work</span>
    <h2 class="sec-title">Selected case studies, with <em>actual numbers.</em></h2>
    <p class="sec-sub">Real engagements. Real numbers from CrUX, GSC, and analytics, not model outputs.</p>
  </div>
  <div class="prj-list">
    <?php foreach ($projects as $i => $p): ?>
      <article class="prj">
        <header class="prj-head">
          <span class="prj-num"><?= sprintf('%02d', $i + 1) ?></span>
          <span class="prj-type"><?= e($p['type']) ?></span>
          <span class="prj-year"><?= e($p['year']) ?></span>
        </header>
        <div class="prj-body">
          <div class="prj-metric-card">
            <div class="prj-mv"><?= e($p['metricVal']) ?></div>
            <div class="prj-ml">
              <?php foreach ($p['metricLabel'] as $line): ?>
                <div><?= e($line) ?></div>
              <?php endforeach; ?>
            </div>
            <div class="prj-chartwrap" data-spark="<?= e(implode(',', $p['chart']['data'])) ?>"></div>
            <span class="prj-chart-note"><?= e($p['chart']['note']) ?></span>
          </div>
          <div class="prj-content">
            <h3><?= e($p['title']) ?></h3>
            <?php foreach ($p['paragraphs'] as $para): ?>
              <p><?= e($para) ?></p>
            <?php endforeach; ?>
            <div class="prj-results">
              <?php foreach ($p['results'] as [$v, $l]): ?>
                <div class="prj-r"><div class="prj-rv"><?= e($v) ?></div><div class="prj-rl"><?= e($l) ?></div></div>
              <?php endforeach; ?>
            </div>
            <div class="prj-foot">
              <?php foreach ($p['tools'] as $tool): ?>
                <span class="prj-tool"><?= e($tool) ?></span>
              <?php endforeach; ?>
              <span class="prj-tl"><?= e($p['timeline']) ?></span>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     INSIGHTS
══════════════════════════════════════════════════════════ -->
<section id="insights" class="sec wrap">
  <div class="sec-head">
    <span class="sec-eyebrow">● Insights</span>
    <h2 class="sec-title">Thinking on search, the web, and <em>what's next.</em></h2>
    <p class="sec-sub">Long-form notes I write when a topic deserves more than a tweet.</p>
  </div>
  <div class="ins-grid">
    <?php foreach ($insights as $insight): ?>
      <a href="#" class="ins" aria-label="<?= e($insight['aria']) ?>">
        <div class="ins-meta">
          <span class="ins-topic"><?= e($insight['topic']) ?></span>
          <span class="ins-read"><?= e($insight['read']) ?></span>
        </div>
        <h3 class="ins-title"><?= e($insight['title']) ?></h3>
        <span class="ins-arrow" aria-hidden="true">↗</span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CONTACT
══════════════════════════════════════════════════════════ -->
<section id="contact" class="sec wrap">
  <div class="ctc-card">
    <div class="ctc-grid">
      <div>
        <p class="ctc-statement">Work with someone who <em>understands the problem.</em></p>
        <p class="ctc-desc">If your site has a technical SEO problem (slow crawls, indexation gaps, CWV failures, JavaScript rendering issues), I can diagnose it precisely and fix it properly.</p>
        <nav class="ctc-channels" aria-label="Contact channels">
          <a href="mailto:jason@thilisadiki.dev" class="ctc-ch">
            <span class="ctc-ch-k">Email</span>
            <span class="ctc-ch-v">jason@thilisadiki.dev</span>
            <span class="ctc-ch-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="tel:+27727655204" class="ctc-ch">
            <span class="ctc-ch-k">Phone</span>
            <span class="ctc-ch-v">072 765 5204</span>
            <span class="ctc-ch-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="https://www.linkedin.com/in/jasonsadiki/" class="ctc-ch" target="_blank" rel="noopener noreferrer">
            <span class="ctc-ch-k">LinkedIn</span>
            <span class="ctc-ch-v">linkedin.com/in/jasonsadiki</span>
            <span class="ctc-ch-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="https://github.com/thilisadiki/" class="ctc-ch" target="_blank" rel="noopener noreferrer">
            <span class="ctc-ch-k">GitHub</span>
            <span class="ctc-ch-v">github.com/thilisadiki</span>
            <span class="ctc-ch-arrow" aria-hidden="true">↗</span>
          </a>
        </nav>
      </div>
      <form class="ctc-form" id="contact-form" novalidate aria-label="Contact form">
        <div class="ctc-row">
          <div class="ctc-field">
            <input type="text" id="f-name" name="name" placeholder=" " required autocomplete="name" />
            <label for="f-name">Name</label>
          </div>
          <div class="ctc-field">
            <input type="email" id="f-email" name="email" placeholder=" " required autocomplete="email" />
            <label for="f-email">Email</label>
          </div>
        </div>
        <div class="ctc-field">
          <input type="text" id="f-company" name="company" placeholder=" " autocomplete="organization" />
          <label for="f-company">Company / Website</label>
        </div>
        <div class="ctc-field">
          <select id="f-service" name="service" required>
            <option value="" disabled selected hidden></option>
            <?php foreach ($services as $s): ?>
              <option><?= e($s['title']) ?></option>
            <?php endforeach; ?>
            <option>Not sure, let's talk</option>
          </select>
          <label for="f-service">Service area</label>
        </div>
        <div class="ctc-field">
          <textarea id="f-message" name="message" placeholder=" " required></textarea>
          <label for="f-message">Describe the problem</label>
        </div>
        <div class="ctc-honeypot" aria-hidden="true">
          <label for="f-url">Website URL (leave empty)</label>
          <input type="text" id="f-url" name="url" tabindex="-1" autocomplete="off" />
        </div>
        <div class="ctc-submit">
          <button type="submit" id="submit-btn" class="btn btn-filled btn-large">Send message</button>
          <span class="ctc-note">Response within 24h. No pitch decks.</span>
        </div>
      </form>
    </div>
  </div>
</section>

</main>

<!-- ══════════════════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════════════════ -->
<footer class="footer" role="contentinfo">
  <div class="wrap">
    <div class="ft-row">
      <div class="ft-name">
        <span class="brand-mark">JS</span>
        Jason <em>Sadiki</em>
      </div>
      <nav class="ft-nav" aria-label="Footer navigation">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#work">Work</a>
        <a href="#insights">Insights</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="ft-meta">© 2026 · Built without frameworks<br/>v3.0 · Material You</div>
    </div>
    <div class="ft-mantra">Search is an <em>engineering</em> problem.</div>
  </div>
</footer>

<a href="#contact" class="fab">
  <span class="fab-ico" aria-hidden="true">→</span>
  Start a project
</a>

<script src="main.js"></script>
</body>
</html>
