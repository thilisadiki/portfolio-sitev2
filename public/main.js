(function () {
  'use strict';

  /* ── Navigation ────────────────────────────────────────── */
  const nav     = document.getElementById('nav');
  const burger  = document.querySelector('.nav-burger');
  const mobileNav = document.querySelector('.nav-mobile');
  const navAnchors = document.querySelectorAll('.nav-links a, .nav-mobile a');

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  burger.addEventListener('click', () => {
    const open = mobileNav.classList.toggle('open');
    burger.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', open);
  });

  mobileNav.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      mobileNav.classList.remove('open');
      burger.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
    });
  });

  /* ── Active nav highlighting ───────────────────────────── */
  const sections = document.querySelectorAll('section[id]');
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navAnchors.forEach(a => {
          a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id);
        });
      }
    });
  }, { rootMargin: '-40% 0px -50% 0px' });
  sections.forEach(s => sectionObserver.observe(s));

  /* ── Scroll reveal — opacity only ──────────────────────── */
  const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { rootMargin: '0px 0px -80px 0px', threshold: 0.05 });

  document.querySelectorAll('.fade').forEach(el => revealObserver.observe(el));

  /* ── Counter animation ─────────────────────────────────── */
  function runCounter(el) {
    const target   = parseInt(el.dataset.target, 10);
    const duration = 1400;
    const start    = performance.now();
    const easeOut  = t => 1 - Math.pow(1 - t, 3);
    function step(now) {
      const p = Math.min((now - start) / duration, 1);
      el.textContent = Math.floor(easeOut(p) * target).toLocaleString();
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.6 });

  document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));

  /* ── Ticker: duplicate content for seamless loop ───────── */
  const track = document.querySelector('.ticker-track');
  if (track) {
    const clone = track.innerHTML;
    track.innerHTML += clone;
  }

  /* ── Smooth scroll for anchor links ───────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = target.getBoundingClientRect().top + window.scrollY - 72;
      window.scrollTo({ top: offset, behavior: 'smooth' });
    });
  });

  /* ── Contact form ──────────────────────────────────────── */
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
        submitBtn.textContent = 'FILL REQUIRED FIELDS';
        submitBtn.style.background = '#ff4444';
        setTimeout(() => {
          submitBtn.textContent = 'SEND MESSAGE';
          submitBtn.style.background = '';
        }, 2500);
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = 'SENDING...';

      try {
        const res = await fetch('/contact.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
        });
        const data = await res.json().catch(() => ({}));
        if (!res.ok || !data.ok) throw new Error(data.error || 'Send failed');

        submitBtn.textContent = 'MESSAGE SENT ✓';
        submitBtn.style.background = '#4ade80';
        submitBtn.style.color = '#141210';
        form.reset();
        setTimeout(() => {
          submitBtn.textContent = 'SEND MESSAGE';
          submitBtn.style.background = '';
          submitBtn.style.color = '';
          submitBtn.disabled = false;
        }, 4000);
      } catch (err) {
        submitBtn.textContent = 'SEND FAILED — TRY AGAIN';
        submitBtn.style.background = '#ff4444';
        setTimeout(() => {
          submitBtn.textContent = 'SEND MESSAGE';
          submitBtn.style.background = '';
          submitBtn.disabled = false;
        }, 3500);
      }
    });
  }

  /* ── Article modal ─────────────────────────────────────── */
  const modal        = document.getElementById('article-modal');
  const modalOverlay = modal.querySelector('.modal-overlay');
  const modalClose   = modal.querySelector('.modal-close');
  let lastFocused    = null;

  function openArticleModal() {
    lastFocused = document.activeElement;
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    modalClose.focus();
  }

  window.closeArticleModal = function () {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    if (lastFocused) lastFocused.focus();
  };

  modalOverlay.addEventListener('click', window.closeArticleModal);
  modalClose.addEventListener('click', window.closeArticleModal);

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.classList.contains('open')) {
      window.closeArticleModal();
    }
  });

  document.querySelectorAll('.insight-entry').forEach(entry => {
    entry.addEventListener('click', e => {
      e.preventDefault();
      openArticleModal();
    });
  });

})();
