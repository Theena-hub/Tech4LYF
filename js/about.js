$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
      
    // Enable Carousel Indicators
    $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
      $("#myCarousel").carousel(3);
    });
      
    // Enable Carousel Controls
    $(".left").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
      $("#myCarousel").carousel("next");
    });
  });

  // part2 owlcarousrl
  
  var owl = $('.screenshot_slider').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    margin: 0,    
    autoplayTimeout: 4000,
    smartSpeed: 400,
    autoplay:false,
    touchDrag  : true,
    mouseDrag  : true,
    navText: ['&#8592;', '&#8594;'],
    responsive: {
        0: {
            items: 1,
        },
        768: {
    // center: true,

            items: 2
        },
        992: {
    center: true,

            items: 3
        }
    }
});


jQuery(document.documentElement).keydown(function (event) {    
    if (event.keyCode == 37) {
    
    } else if (event.keyCode == 39) {
     
    }
    
});