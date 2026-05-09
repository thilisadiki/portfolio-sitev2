(function () {
  'use strict';

  /* ── Theme switcher ────────────────────────────────────── */
  const THEMES = {
    violet: {
      primary:'#6750A4', onPrimary:'#FFFFFF', primaryContainer:'#EADDFF', onPrimaryContainer:'#21005D',
      secondary:'#625B71', secondaryContainer:'#E8DEF8', onSecondaryContainer:'#1D192B',
      tertiary:'#7D5260', tertiaryContainer:'#FFD8E4', onTertiaryContainer:'#31111D',
      surface:'#FEF7FF', surfaceLow:'#F7F2FA', surfaceContainer:'#F3EDF7', surfaceHigh:'#ECE6F0', surfaceHighest:'#E6E0E9',
      onSurface:'#1D1B20', onSurfaceVariant:'#49454F', outlineVariant:'#CAC4D0',
    },
    ocean: {
      primary:'#0061A4', onPrimary:'#FFFFFF', primaryContainer:'#D1E4FF', onPrimaryContainer:'#001D36',
      secondary:'#535F70', secondaryContainer:'#D7E3F7', onSecondaryContainer:'#101C2B',
      tertiary:'#6B5778', tertiaryContainer:'#F2DAFF', onTertiaryContainer:'#251431',
      surface:'#F7F9FF', surfaceLow:'#F1F4FB', surfaceContainer:'#EBEEF6', surfaceHigh:'#E5E8F0', surfaceHighest:'#DFE3EA',
      onSurface:'#191C20', onSurfaceVariant:'#43474E', outlineVariant:'#C3C7CF',
    },
    citrus: {
      primary:'#7A5900', onPrimary:'#FFFFFF', primaryContainer:'#FFDF9C', onPrimaryContainer:'#261A00',
      secondary:'#6C5D3F', secondaryContainer:'#F5E0BB', onSecondaryContainer:'#251A04',
      tertiary:'#4B6649', tertiaryContainer:'#CCECC8', onTertiaryContainer:'#08210B',
      surface:'#FFF8F1', surfaceLow:'#FBF3EB', surfaceContainer:'#F5EDE5', surfaceHigh:'#EFE7DF', surfaceHighest:'#E9E1D9',
      onSurface:'#1F1B13', onSurfaceVariant:'#4F4639', outlineVariant:'#D1C5B4',
    },
    forest: {
      primary:'#386A20', onPrimary:'#FFFFFF', primaryContainer:'#B7F397', onPrimaryContainer:'#072100',
      secondary:'#56624B', secondaryContainer:'#DAE7C9', onSecondaryContainer:'#141E0D',
      tertiary:'#386666', tertiaryContainer:'#BCECEC', onTertiaryContainer:'#002020',
      surface:'#F8FAEF', surfaceLow:'#F2F4E9', surfaceContainer:'#ECEFE3', surfaceHigh:'#E6E9DD', surfaceHighest:'#E0E4D8',
      onSurface:'#1A1C16', onSurfaceVariant:'#44483D', outlineVariant:'#C5C8BA',
    },
  };

  function applyTheme(name) {
    const t = THEMES[name] || THEMES.violet;
    const r = document.documentElement;
    const map = {
      '--primary':t.primary, '--on-primary':t.onPrimary, '--primary-container':t.primaryContainer, '--on-primary-container':t.onPrimaryContainer,
      '--secondary':t.secondary, '--secondary-container':t.secondaryContainer, '--on-secondary-container':t.onSecondaryContainer,
      '--tertiary':t.tertiary, '--tertiary-container':t.tertiaryContainer, '--on-tertiary-container':t.onTertiaryContainer,
      '--surface':t.surface, '--surface-container-low':t.surfaceLow, '--surface-container':t.surfaceContainer,
      '--surface-container-high':t.surfaceHigh, '--surface-container-highest':t.surfaceHighest,
      '--on-surface':t.onSurface, '--on-surface-variant':t.onSurfaceVariant, '--outline-variant':t.outlineVariant,
    };
    Object.entries(map).forEach(([k, v]) => r.style.setProperty(k, v));
    document.body.style.background = t.surface;
  }

  document.querySelectorAll('.theme-dot').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.theme-dot').forEach(d => d.classList.remove('is-active'));
      btn.classList.add('is-active');
      applyTheme(btn.dataset.theme);
    });
  });

  /* ── Mobile menu ───────────────────────────────────────── */
  const burger = document.querySelector('.appbar-burger');
  const mobileMenu = document.querySelector('.appbar-mobile');
  if (burger && mobileMenu) {
    const setOpen = (open) => {
      mobileMenu.classList.toggle('is-open', open);
      burger.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', String(open));
    };
    burger.addEventListener('click', () => setOpen(!mobileMenu.classList.contains('is-open')));
    mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setOpen(false)));
  }

  /* ── Smooth scroll for in-page anchors ─────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const href = a.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();
      const offset = target.getBoundingClientRect().top + window.scrollY - 80;
      window.scrollTo({ top: offset, behavior: 'smooth' });
    });
  });

  /* ── Active tab highlighting via section observer ─────── */
  const tabs = document.querySelectorAll('.appbar-tab');
  const sections = document.querySelectorAll('main section[id]');
  const tabObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        tabs.forEach(t => t.classList.toggle('is-active', t.dataset.tab === id));
      }
    });
  }, { rootMargin: '-40% 0px -55% 0px' });
  sections.forEach(s => tabObserver.observe(s));

  /* ── Count-up animation for hero stats ─────────────────── */
  function runCount(el) {
    const target = parseFloat(el.dataset.count);
    if (isNaN(target)) return;
    const duration = 1100;
    const start = performance.now();
    const ease = t => 1 - Math.pow(1 - t, 3);
    function step(now) {
      const p = Math.min(1, (now - start) / duration);
      const v = Math.round(ease(p) * target);
      el.textContent = v.toLocaleString();
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }
  const countObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCount(entry.target);
        countObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });
  document.querySelectorAll('[data-count]').forEach(el => countObs.observe(el));

  /* ── Sparklines ────────────────────────────────────────── */
  function renderSparkline(wrap) {
    const raw = wrap.dataset.spark;
    if (!raw) return;
    const data = raw.split(',').map(Number);
    if (data.length < 2) return;
    const w = 240, h = 44;
    const max = Math.max(...data), min = Math.min(...data);
    const range = max - min || 1;
    const pts = data.map((v, i) => {
      const x = (i / (data.length - 1)) * w;
      const y = h - ((v - min) / range) * h;
      return `${x.toFixed(1)},${y.toFixed(1)}`;
    }).join(' ');
    const area = `0,${h} ${pts} ${w},${h}`;
    wrap.innerHTML = `<svg viewBox="0 0 ${w} ${h}" preserveAspectRatio="none" aria-hidden="true">
      <polygon points="${area}" fill="currentColor" opacity="0.18"/>
      <polyline points="${pts}" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`;
  }
  document.querySelectorAll('[data-spark]').forEach(renderSparkline);

  /* ── Expandable service cards ─────────────────────────── */
  document.querySelectorAll('.svc-card').forEach(card => {
    const detail = card.querySelector('.svc-detail-wrap');
    if (detail && card.classList.contains('is-open')) detail.hidden = false;
    card.addEventListener('click', () => {
      const wasOpen = card.classList.contains('is-open');
      document.querySelectorAll('.svc-card').forEach(c => {
        c.classList.remove('is-open');
        c.setAttribute('aria-expanded', 'false');
        const d = c.querySelector('.svc-detail-wrap');
        if (d) d.hidden = true;
      });
      if (!wasOpen) {
        card.classList.add('is-open');
        card.setAttribute('aria-expanded', 'true');
        if (detail) detail.hidden = false;
      }
    });
  });

  /* ── Contact form (Resend via /contact.php) ───────────── */
  const form = document.getElementById('contact-form');
  const submitBtn = document.getElementById('submit-btn');
  const formRenderedAt = Date.now();
  if (form) {
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const payload = {
        name:    document.getElementById('f-name').value.trim(),
        email:   document.getElementById('f-email').value.trim(),
        company: document.getElementById('f-company').value.trim(),
        service: document.getElementById('f-service').value,
        message: document.getElementById('f-message').value.trim(),
        url:     document.getElementById('f-url').value,
        elapsed: Date.now() - formRenderedAt,
      };

      if (!payload.name || !payload.email || !payload.message) {
        submitBtn.textContent = 'Fill required fields';
        setTimeout(() => { submitBtn.textContent = 'Send message'; }, 2500);
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      try {
        const res = await fetch('/contact.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
        });
        const data = await res.json().catch(() => ({}));
        if (!res.ok || !data.ok) throw new Error(data.error || 'Send failed');

        submitBtn.textContent = 'Sent ✓';
        form.reset();
        setTimeout(() => {
          submitBtn.textContent = 'Send message';
          submitBtn.disabled = false;
        }, 4000);
      } catch (err) {
        submitBtn.textContent = 'Send failed, try again';
        setTimeout(() => {
          submitBtn.textContent = 'Send message';
          submitBtn.disabled = false;
        }, 3500);
      }
    });
  }

})();
