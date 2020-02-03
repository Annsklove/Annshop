$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  focusOnSelect: true
});

$('a[data-slide]').click(function (e) {
  e.preventDefault();
  var slideno = $(this).data('slide');
  $('.slider-nav').slick('slickGoTo', slideno - 1);
});

// $(function() {
//   // Owl Carousel
//   var owl = $(".owl-carousel");
//   owl.owlCarousel({
//     items: 2,
//     loop: true,
//     nav: true,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
//       0:{
//           items:1
//       },
//       600:{
//           items:2
//       },
//       1000:{
//           items:4
//       }
//     }
//   });
// });

$(document).ready(function() {
  $('#carouselOffers').owlCarousel({
      loop:true, //Зацикливаем слайдер
      nav:true, //Отключение навигации
      autoplay:true, //Автозапуск слайдера
      smartSpeed:1000, //Время движения слайда
      autoplayTimeout:5000, //Время смены слайда
      autoplayHoverPause: true, //останавливаем при наведении
      responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
  });
});



