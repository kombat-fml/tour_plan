document.addEventListener('DOMContentLoaded', () => {
  'use strict';

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

  const bigCard = document.getElementById('big-card');
  const body = document.querySelector('body');

  let clientWidth = document.documentElement.clientWidth;
  //let clientHeight = document.documentElement.clientHeight;
  const menuButton = document.querySelector('.menu-button');

  //открытие и закрытие мобильного меню
  menuButton.addEventListener('click', () => {
    document
      .querySelector('.navbar-bottom')
      .classList.toggle('navbar-bottom--visible');

    // Убираем скрол при открытом мобильном меню
    body.classList.toggle('no-scroll');

    menuButton.classList.toggle('menu-button--active');
  });

  if (clientWidth > 576) {
    bigCard.classList.add('packages__card--big-card');
  } else {
    bigCard.classList.remove('packages__card--big-card');
  }

  window.addEventListener('resize', function () {
    clientWidth = document.documentElement.clientWidth;
    //clientHeight = document.documentElement.clientHeight;
    if (clientWidth > 576) {
      bigCard.classList.add('packages__card--big-card');
    } else {
      bigCard.classList.remove('packages__card--big-card');
    }
  });

  const modalButton = document.querySelectorAll('button[data-toggle=modal]');
  const closeModalButton = document.querySelector('.modal__close');
  const modalDialog = document.querySelector('.modal__dialog');
  const modalContainer = document.querySelector('.modal__container');
  const modalForm = document.querySelector('.modal__form');

  const closeModal = () => {
    modalDialog.classList.remove('modal__dialog--active');
    modalContainer.classList.remove('modal__container--active');
    body.classList.remove('no-scroll');
    body.style.paddingRight = 0;
    modalForm.reset();
  };

  //определяем ширину скролла
  const returnScrollWidth = () => {
    let div = document.createElement('div');

    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';

    // мы должны вставить элемент в документ, иначе размеры будут равны 0
    document.body.append(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;

    div.remove();
    return scrollWidth;
  };

  closeModalButton.addEventListener('click', (event) => {
    event.preventDefault();
    closeModal();
  });

  modalButton.forEach((item) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      modalDialog.classList.add('modal__dialog--active');
      modalContainer.classList.add('modal__container--active');
      body.classList.add('no-scroll');
      body.style.paddingRight = returnScrollWidth() + 'px';
    });
  });

  //закрытие модального окна или меню при нажатии ESC
  document.body.addEventListener(
    'keyup',
    function (e) {
      var key = e.keyCode;
      if (key == '27') {
        document
          .querySelector('.navbar-bottom')
          .classList.remove('navbar-bottom--visible');
        menuButton.classList.remove('menu-button--active');
        closeModal();
      }
    },
    false
  );

  //закрытие модального окна при клике вне формы
  modalContainer.addEventListener('click', (event) => {
    if (!event.target.closest('.modal__dialog')) {
      closeModal();
    }
  });
});
