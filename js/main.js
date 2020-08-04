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

  const bigCard = document.getElementById('big-card');
  const body = document.querySelector('body');

  let clientWidth = document.documentElement.clientWidth;
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

  // Обработка форм
  $('.form').each(function () {
    $(this).validate({
      errorClass: 'invalid',
      rules: {
        name: {
          required: true,
          minlength: '2',
        },
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          minlength: 18,
        },
      },
      messages: {
        name: {
          required: 'Please specify your name',
          minlength: 'The name must be at least 2 characters',
        },
        email: {
          required: 'We need your email address to contact you',
          email: 'Your email address must be in the format of name@domain.com',
        },
        phone: {
          required: 'Please, enter your phone number',
          minlength: 'Phone number must be 10 digits',
        },
      },
    });
  });

  AOS.init();
});
