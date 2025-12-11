document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menu-toggle');
  const closeBtn = document.getElementById('cross');
  const overlay = document.querySelector('.menu-overlay');

  const openToggle = () => document.body.classList.toggle('menu-open');
  const closeMenu = () => document.body.classList.remove('menu-open');

  if (toggle) {
    toggle.addEventListener('click', openToggle);
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', closeMenu);
  }

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }
});