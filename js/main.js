// ─── Mobile menu ─────────────────────────────────────────────────────────────
const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');

if (toggle && menu) {
  toggle.addEventListener('click', () => {
    menu.classList.toggle('open');
  });

  // Close menu when any nav link is tapped (avoids menu staying open after route change)
  document.querySelectorAll('#mobile-menu a').forEach(a => {
    a.addEventListener('click', () => {
      menu.classList.remove('open');
    });
  });
}

// ─── Active nav highlight via IntersectionObserver ───────────────────────────
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('[data-nav-link]');

if (sections.length && navLinks.length) {
  // Top inset (-80px) clears the fixed nav bar so the section isn't considered
  // "active" while it's hidden behind it. Bottom inset (-50%) means the section
  // must reach the viewport midpoint before its nav link activates.
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(link => {
          const href = link.getAttribute('href');
          if (href === `/#${id}` || href === `#${id}`) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }
    });
  }, { rootMargin: '-80px 0px -50% 0px' });

  sections.forEach(section => observer.observe(section));
}

// ─── Back home arrow — hidden above the fold, fades in once user scrolls down ─
const backHome = document.querySelector('.back-home');
if (backHome) {
  window.addEventListener('scroll', () => {
    backHome.classList.toggle('visible', window.scrollY > 150);
  }, { passive: true });
}

// ─── Back to top button ───────────────────────────────────────────────────────
const backToTop = document.getElementById('back-to-top');

if (backToTop) {
  window.addEventListener('scroll', () => {
    // Show once the user has scrolled past the fold
    if (window.scrollY > 400) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// ─── Achievement ticker — pause on touch hold, resume on release ──────────────
const tickerTrack = document.querySelector('.ticker-track');

if (tickerTrack) {
  // { passive: true } tells the browser this handler never calls preventDefault(),
  // so it can start scrolling immediately without waiting — prevents scroll jank
  tickerTrack.addEventListener('touchstart', () => {
    tickerTrack.style.animationPlayState = 'paused';
  }, { passive: true });

  tickerTrack.addEventListener('touchend', () => {
    tickerTrack.style.animationPlayState = 'running';
  }, { passive: true });

  // touchcancel fires when the touch sequence is interrupted (e.g. incoming call,
  // notification overlay) without a touchend — resume here or the ticker freezes
  tickerTrack.addEventListener('touchcancel', () => {
    tickerTrack.style.animationPlayState = 'running';
  }, { passive: true });
}

// ─── Contact form — async Formspree submit ────────────────────────────────────
const form = document.getElementById('contactForm');

if (form) {
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    btn.textContent = 'Sending...';
    btn.disabled = true;

    try {
      // FormData serialises all named inputs without manual JSON encoding.
      // Accept: application/json tells Formspree to return JSON instead of
      // redirecting the page (its default HTML response behaviour).
      const res = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { 'Accept': 'application/json' },
      });

      if (res.ok) {
        btn.textContent = 'Sent!';
        form.reset();
        // Reset button label after a brief confirmation window
        setTimeout(() => {
          btn.textContent = 'Send Message';
          btn.disabled = false;
        }, 3000);
      } else {
        btn.textContent = 'Error — try again';
        btn.disabled = false;
      }
    } catch {
      // Network failure (offline, CORS block, etc.)
      btn.textContent = 'Error — try again';
      btn.disabled = false;
    }
  });
}
