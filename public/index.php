<?php
function e(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
$services   = require __DIR__ . '/data/services.php';
$expertise  = require __DIR__ . '/data/expertise.php';
$industries = require __DIR__ . '/data/industries.php';
$projects   = require __DIR__ . '/data/projects.php';
$insights   = require __DIR__ . '/data/insights.php';
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

  <!-- Open Graph -->
  <meta property="og:title" content="Jason Sadiki: Technical SEO &amp; Web Performance Engineer" />
  <meta property="og:description" content="Senior Technical SEO specialist based in South Africa. JavaScript SEO, Core Web Vitals, search rendering, site architecture." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://thilisadiki.dev/" />
  <meta property="og:locale" content="en_ZA" />
  <meta property="og:image" content="https://thilisadiki.dev/og-image.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Jason Sadiki: Technical SEO &amp; Web Performance Engineer" />
  <meta name="twitter:description" content="Senior Technical SEO specialist based in South Africa." />

  <!-- Structured data -->
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
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Johannesburg",
          "addressCountry": "ZA"
        },
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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/tokens.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/typography.css" />
  <link rel="stylesheet" href="css/reveal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/hero.css" />
  <link rel="stylesheet" href="css/ticker.css" />
  <link rel="stylesheet" href="css/section-header.css" />
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/services.css" />
  <link rel="stylesheet" href="css/expertise.css" />
  <link rel="stylesheet" href="css/industries.css" />
  <link rel="stylesheet" href="css/projects.css" />
  <link rel="stylesheet" href="css/insights.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/modal.css" />
</head>
<body>

<!-- ══════════════════════════════════════════════════════════
     NAV
══════════════════════════════════════════════════════════ -->
<nav id="nav" role="navigation" aria-label="Main navigation">
  <div class="nav-wrap">
    <a href="#hero" class="nav-logo">Jason <span>Sadiki</span></a>
    <div class="nav-links" role="list">
      <a href="#about"      role="listitem">About</a>
      <a href="#services"   role="listitem">Services</a>
      <a href="#expertise"  role="listitem">Expertise</a>
      <a href="#industries" role="listitem">Industries</a>
      <a href="#projects"   role="listitem">Work</a>
      <a href="#insights"   role="listitem">Insights</a>
      <a href="#contact"    class="nav-cta" role="listitem">Start a project</a>
    </div>
    <button class="nav-burger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
  <div class="nav-mobile" aria-label="Mobile navigation">
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#expertise">Expertise</a>
    <a href="#industries">Industries</a>
    <a href="#projects">Work</a>
    <a href="#insights">Insights</a>
    <a href="#contact">Start a project</a>
  </div>
</nav>

<!-- ══════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════ -->
<section id="hero" aria-labelledby="hero-heading">
  <div class="hero-inner">

    <div class="hero-eyebrow fade">
      <span class="avail">
        <span class="avail-dot" aria-hidden="true"></span>
        Available for new projects
      </span>
      <span class="label">Johannesburg, South Africa</span>
    </div>

    <h1 id="hero-heading" class="hero-heading fade fade-d1">
      Search is an<br>
      <span class="accent">engineering</span><br>
      problem<span class="accent">.</span>
    </h1>

    <div class="hero-bottom">
      <div class="hero-desc fade fade-d2">
        <p>
          I help companies build web experiences that are
          <strong>genuinely discoverable</strong>, not through shortcuts,
          but through precise technical work at the intersection of search
          systems and modern web architecture.
        </p>
        <div class="hero-actions">
          <a href="#projects" class="btn-primary">View Work</a>
          <a href="#contact"  class="btn-text">Start a conversation →</a>
        </div>
      </div>
      <div class="hero-stats fade fade-d3" aria-label="Key statistics">
        <div class="h-stat">
          <div class="h-stat-num">
            <span data-target="8" aria-label="8">8</span><span class="suf">+</span>
          </div>
          <div class="h-stat-lbl">years in SEO</div>
        </div>
        <div class="h-stat">
          <div class="h-stat-num">
            <span data-target="60" aria-label="60">60</span><span class="suf">+</span>
          </div>
          <div class="h-stat-lbl">projects</div>
        </div>
        <div class="h-stat">
          <div class="h-stat-num">
            <span data-target="340" aria-label="340">340</span><span class="suf">%</span>
          </div>
          <div class="h-stat-lbl">avg organic growth</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     TICKER
══════════════════════════════════════════════════════════ -->
<div class="ticker-wrap" aria-hidden="true">
  <div class="ticker-track">
    <span class="ticker-item">Technical SEO <span class="dot"></span></span>
    <span class="ticker-item">JavaScript SEO <span class="dot"></span></span>
    <span class="ticker-item">Core Web Vitals <span class="dot"></span></span>
    <span class="ticker-item">Search Rendering <span class="dot"></span></span>
    <span class="ticker-item">Crawl Optimisation <span class="dot"></span></span>
    <span class="ticker-item">Structured Data <span class="dot"></span></span>
    <span class="ticker-item">Log File Analysis <span class="dot"></span></span>
    <span class="ticker-item">Site Architecture <span class="dot"></span></span>
    <span class="ticker-item">Web Performance <span class="dot"></span></span>
    <span class="ticker-item">Local SEO <span class="dot"></span></span>
    <span class="ticker-item">Next.js SEO <span class="dot"></span></span>
    <span class="ticker-item">Indexation Strategy <span class="dot"></span></span>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     ABOUT
══════════════════════════════════════════════════════════ -->
<section id="about" aria-labelledby="about-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">01</span>
      <h2 id="about-heading" class="sec-title">
        SEO grew up.<br>
        Most practitioners <em>didn't.</em>
      </h2>
    </div>

    <div class="about-grid">
      <div class="about-copy">
        <p class="fade">
          I started where most SEOs do: keyword research, on-page
          fundamentals, link building. That foundation mattered.
          But I kept watching the real problems compound at a layer
          those tools couldn't reach.
        </p>
        <p class="fade fade-d1">
          JavaScript frameworks became the dominant way to build
          for the web. Googlebot's rendering pipeline became a
          genuine engineering concern. <strong>The gap between what
          a user sees and what a search engine indexes grew into
          a business-critical problem</strong>, and almost no one
          in SEO was equipped to diagnose it properly.
        </p>
        <p class="fade fade-d2">
          So I crossed that gap deliberately. I learned how the
          Web Rendering Service actually works, how crawl budgets
          are allocated, how Core Web Vitals are measured in field
          data versus in lab conditions. I started reading
          engineering documentation and debugging rendering
          behaviour the way developers do, not to pass a
          certification, but because the problems required it.
        </p>
        <p class="fade fade-d3">
          Today I work at the intersection of
          <em>search visibility and web engineering</em>.
          That means I can diagnose why your Next.js app isn't
          being indexed, trace a CLS regression to a specific
          component, or redesign a URL taxonomy that's cannibalising
          itself, then communicate all of it clearly to both
          your CTO and your marketing director.
        </p>
      </div>

      <aside class="about-aside fade fade-d1" aria-label="Technical skills">
        <p class="about-aside-title">Technical focus areas</p>
        <ul>
          <li class="skill-line"><span class="skill-name">JavaScript SEO</span><span class="skill-cat">Rendering</span></li>
          <li class="skill-line"><span class="skill-name">Core Web Vitals</span><span class="skill-cat">Performance</span></li>
          <li class="skill-line"><span class="skill-name">Search Rendering Diagnostics</span><span class="skill-cat">Indexation</span></li>
          <li class="skill-line"><span class="skill-name">Log File Analysis</span><span class="skill-cat">Crawl</span></li>
          <li class="skill-line"><span class="skill-name">Structured Data / JSON-LD</span><span class="skill-cat">Schema</span></li>
          <li class="skill-line"><span class="skill-name">Crawl Budget Optimisation</span><span class="skill-cat">Crawl</span></li>
          <li class="skill-line"><span class="skill-name">Site Architecture</span><span class="skill-cat">Information</span></li>
          <li class="skill-line"><span class="skill-name">Next.js / Nuxt SEO</span><span class="skill-cat">Frameworks</span></li>
          <li class="skill-line"><span class="skill-name">Google Search Console</span><span class="skill-cat">Analytics</span></li>
          <li class="skill-line"><span class="skill-name">Local SEO / GBP</span><span class="skill-cat">Local</span></li>
          <li class="skill-line"><span class="skill-name">Python for SEO</span><span class="skill-cat">Automation</span></li>
          <li class="skill-line"><span class="skill-name">Technical Auditing</span><span class="skill-cat">Diagnostics</span></li>
        </ul>
      </aside>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════════════════ -->
<section id="services" aria-labelledby="services-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">02</span>
      <h2 id="services-heading" class="sec-title">
        What I do, and<br>
        how I <em>approach</em> it.
      </h2>
    </div>

    <ol class="service-list" aria-label="Services">
      <?php foreach ($services as $i => $s): ?>
        <li class="service-entry fade">
          <span class="service-n" aria-hidden="true"><?= sprintf('%02d', $i + 1) ?></span>
          <div class="service-main">
            <h3><?= e($s['title']) ?></h3>
            <p><?= e($s['description']) ?></p>
          </div>
          <div class="service-meta">
            <p class="service-deliverable"><strong>Deliverable:</strong> <?= e($s['deliverable']) ?></p>
            <ul class="service-tags-list" aria-label="Methods">
              <?php foreach ($s['methods'] as $m): ?>
                <li class="s-tag"><?= e($m) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     EXPERTISE
══════════════════════════════════════════════════════════ -->
<section id="expertise" aria-labelledby="expertise-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">03</span>
      <h2 id="expertise-heading" class="sec-title">
        Technical depth across<br>
        the full <em>search stack.</em>
      </h2>
    </div>

    <div class="expertise-grid fade">
      <?php foreach ($expertise as $i => $d): ?>
        <div class="domain">
          <p class="domain-num"><?= sprintf('%02d', $i + 1) ?></p>
          <h4><?= e($d['title']) ?></h4>
          <p><?= e($d['description']) ?></p>
          <ul class="domain-items">
            <?php foreach ($d['items'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     INDUSTRIES
══════════════════════════════════════════════════════════ -->
<section id="industries" aria-labelledby="industries-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">04</span>
      <h2 id="industries-heading" class="sec-title">
        Industries I know<br>
        from the <em>inside out.</em>
      </h2>
    </div>

    <div class="industries-grid fade">
      <?php foreach ($industries as $i => $ind): ?>
        <div class="industry">
          <p class="industry-num"><?= sprintf('%02d', $i + 1) ?></p>
          <h4><?= e($ind['title']) ?></h4>
          <p class="industry-sub"><?= e($ind['subtitle']) ?></p>
          <p><?= e($ind['description']) ?></p>
          <ul class="industry-signals">
            <?php foreach ($ind['signals'] as $signal): ?>
              <li><?= e($signal) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     PROJECTS
══════════════════════════════════════════════════════════ -->
<section id="projects" aria-labelledby="projects-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">05</span>
      <h2 id="projects-heading" class="sec-title">
        Selected work,<br>
        with <em>actual numbers.</em>
      </h2>
    </div>

    <ol class="project-list" aria-label="Case studies">
      <?php foreach ($projects as $i => $p): ?>
        <li class="project-entry fade">
          <div class="project-top">
            <span class="project-idx"><?= sprintf('%02d', $i + 1) ?></span>
            <span class="project-type"><?= e($p['type']) ?></span>
            <span class="project-year"><?= e($p['year']) ?></span>
          </div>
          <div class="project-body">
            <div class="project-metric" aria-label="<?= e($p['metric_aria']) ?>">
              <span class="project-metric-val"><?= $p['metric_html'] ?></span>
              <span class="project-metric-lbl"><?= $p['metric_label_html'] ?></span>
            </div>
            <div class="project-content">
              <h3><?= e($p['title']) ?></h3>
              <?php foreach ($p['paragraphs'] as $para): ?>
                <p><?= e($para) ?></p>
              <?php endforeach; ?>
              <div class="project-results" aria-label="Results breakdown">
                <?php foreach ($p['results'] as [$val, $lbl]): ?>
                  <div class="pr"><span class="pr-val"><?= e($val) ?></span><span class="pr-lbl"><?= e($lbl) ?></span></div>
                <?php endforeach; ?>
              </div>
              <div class="project-tools">
                <?php foreach ($p['tools'] as $tool): ?>
                  <span class="p-tool"><?= e($tool) ?></span>
                <?php endforeach; ?>
                <span class="p-timeline"><?= e($p['timeline']) ?></span>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     INSIGHTS
══════════════════════════════════════════════════════════ -->
<section id="insights" aria-labelledby="insights-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">06</span>
      <h2 id="insights-heading" class="sec-title">
        Thinking on search,<br>
        the web, and <em>what's next.</em>
      </h2>
    </div>

    <div class="insight-list fade" role="list">
      <?php foreach ($insights as $insight): ?>
        <a href="#" class="insight-entry" role="listitem" aria-label="<?= e($insight['aria']) ?>">
          <div>
            <div class="insight-meta-row">
              <span class="insight-topic"><?= e($insight['topic']) ?></span>
              <span class="insight-read"><?= e($insight['read']) ?></span>
            </div>
            <h3 class="insight-title"><?= e($insight['title']) ?></h3>
          </div>
          <span class="insight-arrow" aria-hidden="true">↗</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CONTACT
══════════════════════════════════════════════════════════ -->
<section id="contact" aria-labelledby="contact-heading">
  <div class="wrap">
    <div class="sec-header">
      <span class="sec-num">07</span>
      <h2 id="contact-heading" class="sec-title">
        Work with someone who<br>
        <em>understands the problem.</em>
      </h2>
    </div>

    <div class="contact-grid">
      <div class="contact-left fade">
        <p class="contact-statement">
          If your site has a technical SEO problem: slow crawls,
          indexation gaps, CWV failures, JavaScript rendering issues.
          I can diagnose it <span class="accent">precisely</span>
          and fix it properly.
        </p>
        <p class="contact-desc">
          I keep my client list small on purpose. If you have a real
          problem and want a technical partner who will actually
          investigate it, not template-apply a generic audit.
          reach out.
        </p>
        <nav class="contact-links" aria-label="Contact channels">
          <a href="mailto:jason@thilisadiki.dev" class="c-link">
            <div class="c-link-info">
              <p class="c-link-type">Email</p>
              <p class="c-link-val">jason@thilisadiki.dev</p>
            </div>
            <span class="c-link-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="tel:+27727655204" class="c-link">
            <div class="c-link-info">
              <p class="c-link-type">Phone</p>
              <p class="c-link-val">072 765 5204</p>
            </div>
            <span class="c-link-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="https://www.linkedin.com/in/jasonsadiki/" class="c-link" target="_blank" rel="noopener noreferrer">
            <div class="c-link-info">
              <p class="c-link-type">LinkedIn</p>
              <p class="c-link-val">linkedin.com/in/jasonsadiki</p>
            </div>
            <span class="c-link-arrow" aria-hidden="true">↗</span>
          </a>
          <a href="https://github.com/thilisadiki/" class="c-link" target="_blank" rel="noopener noreferrer">
            <div class="c-link-info">
              <p class="c-link-type">GitHub</p>
              <p class="c-link-val">github.com/thilisadiki</p>
            </div>
            <span class="c-link-arrow" aria-hidden="true">↗</span>
          </a>
        </nav>
      </div>

      <div class="fade fade-d1">
        <form class="contact-form" id="contact-form" novalidate aria-label="Contact form">
          <div class="form-row">
            <div class="form-field">
              <label for="f-name">Name <span aria-hidden="true">*</span></label>
              <input type="text" id="f-name" name="name" placeholder="Your name" required autocomplete="name" />
            </div>
            <div class="form-field">
              <label for="f-email">Email <span aria-hidden="true">*</span></label>
              <input type="email" id="f-email" name="email" placeholder="you@company.com" required autocomplete="email" />
            </div>
          </div>
          <div class="form-field">
            <label for="f-company">Company / Website</label>
            <input type="text" id="f-company" name="company" placeholder="yourcompany.com" autocomplete="organization" />
          </div>
          <div class="form-field">
            <label for="f-service">What do you need help with?</label>
            <select id="f-service" name="service">
              <option value="" disabled selected>Select a service area</option>
              <option>Technical SEO Audit</option>
              <option>JavaScript SEO</option>
              <option>Core Web Vitals Optimisation</option>
              <option>Search Rendering Diagnostics</option>
              <option>Web Performance Optimisation</option>
              <option>Site Architecture</option>
              <option>Local SEO / GBP</option>
              <option>SEO Consulting</option>
              <option>Not sure, let's talk</option>
            </select>
          </div>
          <div class="form-field">
            <label for="f-message">Describe the problem <span aria-hidden="true">*</span></label>
            <textarea id="f-message" name="message" placeholder="What's happening, what you've already tried, and what stack you're working with..." required></textarea>
          </div>
          <div aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;overflow:hidden;">
            <label for="f-url">Website URL (leave empty)</label>
            <input type="text" id="f-url" name="url" tabindex="-1" autocomplete="off" />
          </div>
          <div class="form-submit">
            <button type="submit" id="submit-btn">SEND MESSAGE</button>
          </div>
          <p class="form-note">Response within 24 hours. No pitch decks, no sales calls. Just a direct conversation.</p>
        </form>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════════════════ -->
<footer role="contentinfo">
  <div class="wrap">
    <div class="footer-inner">
      <p class="footer-name">Jason <span>Sadiki</span> · Johannesburg, South Africa</p>
      <nav class="footer-nav" aria-label="Footer navigation">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#projects">Work</a>
        <a href="#insights">Insights</a>
        <a href="#contact">Contact</a>
      </nav>
      <p class="footer-meta">© 2025 · Built without frameworks</p>
      <button class="back-top" aria-label="Back to top">↑ top</button>
    </div>
  </div>
</footer>

<!-- ══════════════════════════════════════════════════════════
     MODAL
══════════════════════════════════════════════════════════ -->
<div id="article-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-overlay"></div>
  <div class="modal-box">
    <button class="modal-close" aria-label="Close modal">✕</button>
    <p class="modal-label label">Insights</p>
    <h3 id="modal-title" class="modal-heading">Article <em>coming soon.</em></h3>
    <p class="modal-body">I'm working on it. Check back shortly or reach out if you want to be notified when it goes live.</p>
    <a href="#contact" class="modal-cta btn-primary">Get in touch</a>
  </div>
</div>

<script src="main.js"></script>
</body>
</html>
