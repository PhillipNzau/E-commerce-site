//preloader
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(700).fadeOut('slow');
	
	$('.preloader-wrapper')
		.delay(700)
		.fadeOut();
});
 
//sidenav
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  //modal
  (function ($) {
    $(function () {

        //initialize all modals           
        $('.modal').modal();
        //now you can open modal from code
        $('#modal1').modal('open');
        //or by click on trigger
        $('.modal-trigger').modal();

    }); // end of document ready
})(jQuery); // end of jQuery name space

//carousel Or with jQuery
$(document).ready(function(){
  $('.carousel').carousel();
});
 // Or with jQuery

 $('.carousel.carousel-slider').carousel({
  fullWidth: true
});
    
$('.carousel').carousel();
setInterval(function() {
  $('.carousel').carousel('next');
}, 3000);

 // Or with jQuery

 $(document).ready(function(){
  $('.tabs').tabs();
});
  
//zoom
$(document).ready(function(){
  $('#ex1').zoom();
  $('#ex2').zoom({ on:'grab' });
  $('#ex3').zoom({ on:'click' });			 
  $('#ex4').zoom({ on:'toggle' });
});

//slcik
$(document).ready(function(){       
  $('.fade').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    autoplay:true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          autoplay: true,
  autoplaySpeed: 2000
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
  autoplaySpeed: 2000
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          autoplay: true,
  autoplaySpeed: 2000
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
          });
//timer
setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#the-final-countdown i').html(hours+':'+min+':'+sec)
}, 1000);

//banner
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};