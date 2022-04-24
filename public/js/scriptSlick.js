$(document).ready(function () {
  $(".gallery-slider").slick({
    arrows: true,
    dots: false,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1500,
    easing: "ease-out",
    infinite: true,
    initialSlide: 0,
    autoplay: false,
    autoplaySpeed: 3000,
    pauseOnFocus: true,
    pauseOnHover: true,
    pauseOnDotsHover: true,
    draggable: false,
    swipe: true,
    touchThreshold: 5,
    touchMove: false,
    waitForAnimate: true,
    centerMode: true,
    variableWidth: true,
    rows: 1,
    slidesPerRow: 1,
    vertical: false,
    verticalSwiping: false,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          vertical: false,
          arrows: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          vertical: false,
        }
      },
      {
        breakpoint: 360,
        settings: {
          vertical: false,
        }
      }
    ],
    mobileFirst: false,
  });
  $(".feedbacks-slider").slick({
    arrows: true /*Стрелочки*/,
    dots: false /*Точки*/,
    adaptiveHeight: true /*Адаптивная высота слайдера*/,
    slidesToShow: 1 /*Количество слайдов,которые покажет слайдер за 1 раз*/,
    slidesToScroll: 1 /*Количество слайдов,которые пролистываются за 1 клик*/,
    speed: 1500 /*Скорость перелистыванию слайдво(300 мсм)*/,
    easing: "ease-out" /*Вид перелистывания слайдера*/,
    infinite: true /*Будет ли слайдер бесконечный*/,
    initialSlide: 0 /*Назначение стартового слайдера*/,
    autoplay: false /*Автоматическое перелистывание слайдов*/,
    autoplaySpeed: 3000 /*Скорость автоматического перелистывания слайдов(1000 - 1сек)*/,
    pauseOnFocus: true /*Пауза автопроигрывания при клике мыши*/,
    pauseOnHover: true /*Пауза при наведении на слайдер*/,
    pauseOnDotsHover: true /*Пауза автопроигрывания при наведении на точки*/,
    draggable: false /*Перелистывание свайпом на ПК*/,
    swipe: true /*Перелистывание свайпом на телефоне*/,
    touchThreshold: 5 /*Момент срабатывания свайпа при свайпе*/,
    touchMove: false /*Включает все возможности тачскрина*/,
    waitForAnimate: true /*Возможность отключения ожидать анимацию переключения*/,
    centerMode: false /*Выстраивания первого слайда по центру*/,
    variableWidth: false /*Растяжение слайдов по всей ширине*/,
    rows: 1 /*Ряды слайдера*/,
    slidesPerRow: 1 /*Количество слайдов в ряду*/,
    vertical: false /*Вертикальный слайдер*/,
    verticalSwiping: false /*Свайп вверх при вертикальном слайдере*/,
    responsive: [
      /*АДаптив при определенном разрешении*/
      {
        breakpoint: 1300,
        settings: {
          arrows: true,
        },
      },
    ],
    mobileFirst: false,
  });
});
