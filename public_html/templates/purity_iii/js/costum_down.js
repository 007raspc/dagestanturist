jQuery(document).ready(function($) {
  $(".rslides").responsiveSlides({
  	auto: true,
    nav: true,
  });
});

jQuery(document).ready(function($) {
  $('.owl-carousel').owlCarousel({
	  loop:true,
	  autoplay:true,
	  smartSpeed:500,
	  autoplayTimeout:10000,
	  items:1,
	  nav:true,
	  dotsContainer:'#dotitem',
	  RLhashListener:true,
	  startPosition:'URLHash'
  });
});