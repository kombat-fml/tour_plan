var hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
});
var reviewSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
});

ymaps.ready(init);
function init() {
  // Создание карты.
  var myMap = new ymaps.Map('map', {
      // Координаты центра карты.
      // Порядок по умолчанию: «широта, долгота».
      // Чтобы не определять координаты центра карты вручную,
      // воспользуйтесь инструментом Определение координат.
      center: [7.99, 98.291],
      // Уровень масштабирования. Допустимые значения:
      // от 0 (весь мир) до 19.
      zoom: 16,
    }),
    myGeoObject = new ymaps.GeoObject(
      {
        // Описание геометрии.
        geometry: {
          type: 'Point',
          coordinates: [7.99, 98.291],
        },
        // Свойства.
        properties: {
          // Контент метки.
          iconContent: 'Hotel here',
        },
      },
      {
        // Опции.
        // Иконка метки будет растягиваться под размер ее содержимого.
        preset: 'islands#blackStretchyIcon',
        // Метку можно перемещать.
        draggable: false,
      }
    );
  myMap.geoObjects.add(myGeoObject);
}

document.addEventListener('DOMContentLoaded', () => {
  'use strict';
  const bigCard = document.getElementById('big-card');

  let clientWidth = document.documentElement.clientWidth;
  let menuButton = document.querySelector('.menu-button');

  menuButton.addEventListener('click', () => {
    document
      .querySelector('.navbar-bottom')
      .classList.toggle('navbar-bottom--visible');
  });

  if (clientWidth > 576) {
    bigCard.classList.add('packages__card--big-card');
  } else {
    bigCard.classList.remove('packages__card--big-card');
  }

  window.addEventListener('resize', function () {
    clientWidth = document.documentElement.clientWidth;
    if (clientWidth > 576) {
      bigCard.classList.add('packages__card--big-card');
    } else {
      bigCard.classList.remove('packages__card--big-card');
    }
  });
});
