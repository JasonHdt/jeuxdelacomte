document.addEventListener('DOMContentLoaded', () => {
  // Support multiple toggle buttons (mobile and desktop) using a shared class
  const toggles = document.querySelectorAll('.menu-toggle');
  const closeBtn = document.getElementById('cross');
  const overlay = document.querySelector('.menu-overlay');

  const openToggle = () => document.body.classList.toggle('menu-open');
  const closeMenu = () => document.body.classList.remove('menu-open');

  if (toggles && toggles.length) {
    toggles.forEach(t => t.addEventListener('click', openToggle));
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', closeMenu);
  }

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }
});