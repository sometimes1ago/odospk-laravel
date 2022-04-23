function startMenu() {
  let menu = $('.menu');
  let lines = $('.menu__lines');
  let button = $('.menu__button');
  let overlay = $('.menu__overlay');
  let links = $('.menu__link-item');

  button.bind('click', () => {
    lines.toggleClass('menu__lines-active');
    menu.toggleClass('menu__active');
    overlay.toggleClass('menu__overlay-active');
    toggleBody(menu);
  });

  overlay.bind('click', () => {
    lines.toggleClass('menu__lines-active');
    menu.toggleClass('menu__active');
    overlay.toggleClass('menu__overlay-active');
    toggleBody(menu);
  });

  $.each(links, (index, link) => {
    $(link).bind('click', [], () => {
      lines.toggleClass('menu__lines-active');
      menu.toggleClass('menu__active');
      overlay.toggleClass('menu__overlay-active');
      toggleBody(menu);
    });
  });

  function toggleBody(selector) {
    if ($(selector).hasClass('menu__active')) {
      $('body').css('overflow-y', 'hidden');
    } else {
      $('body').css('overflow-y', 'visible');
    }
  }
}

startMenu();
