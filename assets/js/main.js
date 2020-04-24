(function () {
    "use strict";
let mobnav = $('.collapse.navbar-collapse').html();
$('#sm-navbar-vt').html(mobnav);
$('#mob-navbar').on('click',function(){
    $('#sm-navbar-vt').toggleClass('show');
})

$('.mobo-close').on('click',function(){
      $('#sm-navbar-vt').removeClass('show');
});

$('.slick-slide.slick-current.slick-active').find('img').addClass('zoomimg');

setTimeout(() => {
    $(".main-slider").slick('slickNext');
}, 100);



$(".main-slider").slick({
  slidesToShow: 1,
  autoplay:true,
  infinite: true,
  arrows:false,
  autoplaySpeed: 10000,
  speed: 0,
  fade: true,
  cssEase: 'linear',
  slickPlay:'autoplay',
  pauseOnHover:false,
  pauseOnFocus:false,
  autoplay:true

});


$("#testimonial-slider").slick({
  slidesToShow: 1,
  autoplay:true,
  infinite: true,
  arrows:true,
  autoplay:true,
  dots:true
});

$('.slick-next').html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
$('.slick-prev').html('<i class="fa fa-chevron-left" aria-hidden="true"></i>');

var currentSlide = $('.main-slider').slick('slickCurrentSlide');

console.log(currentSlide);

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('nav.navbar').addClass('fixed-header');
    }
    else {
        $('nav.navbar').removeClass('fixed-header');
       
    }
});

$( ".datepicker" ).datepicker();
$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

$("#certified-brand-slider").slick({
    dots: false,
    autoplay:true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  })();