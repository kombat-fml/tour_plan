var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
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