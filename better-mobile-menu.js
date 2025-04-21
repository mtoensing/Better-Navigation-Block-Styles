document.addEventListener('DOMContentLoaded', function () {
    const submenuToggles = document.querySelectorAll('.wp-block-navigation__submenu-container');
  
    submenuToggles.forEach(function (submenu) {
      const parentItem = submenu.closest('.wp-block-navigation-item');
      if (parentItem) {
        const toggleButton = document.createElement('button');
        toggleButton.setAttribute('aria-expanded', 'false');
        toggleButton.classList.add('submenu-toggle');
        toggleButton.innerHTML = '▸'; // Pfeil nach rechts
  
        toggleButton.addEventListener('click', function () {
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          this.setAttribute('aria-expanded', String(!isExpanded));
          submenu.style.display = isExpanded ? 'none' : 'block';
          this.innerHTML = isExpanded ? '▸' : '▾'; // Pfeil nach unten
        });
  
        parentItem.insertBefore(toggleButton, submenu);
        submenu.style.display = 'none';
      }
    });
  });
  