<html lang="en" style=""><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>CodePen - Responsive Owl Carousel with Magnific Popup YouTube and Text</title>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<style>
/* Click the image one by one to see the different layout */

/* Owl Carousel */

.owl-prev {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938188/left-arrow_rlxamy.png') left center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  left: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
  display:none !important;
}

.owl-next {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938220/right-arrow_zwe9sf.png') right center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  right: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
  display:none !important;
}

.owl-prev:hover,
.owl-next:hover {
  opacity: 0.5;
}


/* Owl Carousel */


/* Popup Text */

.white-popup-block {
  background: #FFF;
  padding: 20px 30px;
  text-align: left;
  max-width: 650px;
  margin: 40px auto;
  position: relative;
}

.popuptext {
  display: table;
}
.popuptext p {
  margin-bottom: 10px;
}
.popuptext span {
  font-weight: bold;
  float: right;
}
/* Popup Text */

/* Icon CSS */
.item {
  position: relative;
}
.item i {
  display: none;
  font-size: 4rem;
  color: #FFF;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
}
.item a {
  display: block;
  width: 100%;
}
.item a:hover:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 1;
}
.item a:hover i {
  display: block;
  z-index: 2;
}
.owl-nav .disabled {
  display: none !important;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
<div style="margin-top:250px">
  <div class="owl-carousel owl-loaded owl-drag">
  
  
  
  
  
<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-516px, 0px, 0px); transition: all 0.25s ease 0s; width: 2092px; padding-left: 100px; padding-right: 100px;"><div class="owl-item cloned" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-text" href="#1">
      <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    </a>
    <div id="1" class="mfp-hide white-popup-block popup-text">
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <span>- Opal Ingram</span>
    </div>
  </div></div><div class="owl-item cloned" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg"><i class="fa fa-play" aria-hidden="true"></i>
</a>
  </div></div><div class="owl-item cloned active" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-text" href="#2">
      <img src="https://res.cloudinary.com/milairagny/image/upload/v1487937862/pexels-photo-91227_lpsizl.jpg"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    </a>
    <div id="2" class="mfp-hide white-popup-block popup-text">
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <span>- Rick Baleno</span>
    </div>
  </div></div><div class="owl-item active" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent">
<img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-4_tfmpvk.jpg"><i class="fa fa-play" aria-hidden="true"></i></a>
  </div></div><div class="owl-item active" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"><i class="fa fa-play" aria-hidden="true"></i></a>
  </div></div><div class="owl-item" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-text" href="#1">
      <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    </a>
    <div id="1" class="mfp-hide white-popup-block popup-text">
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <span>- Opal Ingram</span>
    </div>
  </div></div><div class="owl-item" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg"><i class="fa fa-play" aria-hidden="true"></i>
</a>
  </div></div><div class="owl-item" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-text" href="#2">
      <img src="https://res.cloudinary.com/milairagny/image/upload/v1487937862/pexels-photo-91227_lpsizl.jpg"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    </a>
    <div id="2" class="mfp-hide white-popup-block popup-text">
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <span>- Rick Baleno</span>
    </div>
  </div></div><div class="owl-item cloned" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent">
<img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-4_tfmpvk.jpg"><i class="fa fa-play" aria-hidden="true"></i></a>
  </div></div><div class="owl-item cloned" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"><i class="fa fa-play" aria-hidden="true"></i></a>
  </div></div><div class="owl-item cloned" style="width: 122px; margin-right: 50px;"><div class="item">
    <a class="popup-text" href="#1">
      <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
    </a>
    <div id="1" class="mfp-hide white-popup-block popup-text">
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <span>- Opal Ingram</span>
    </div>
  </div></div></div></div><div class="owl-nav"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
  </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
      <script id="rendered-js">
$('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  loop: true,
  dots:false,
  margin: 50,
  responsiveClass: true,
  nav: false,
  loop: true,
  stagePadding: 100,
  responsive: {
    0: {
      items: 1 },

    568: {
      items: 2 },

    600: {
      items: 3 },

    1000: {
      items: 3 } } });



$(document).ready(function () {
  $('.popup-youtube').magnificPopup({
    disableOn: 320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true });

});
$('.item').magnificPopup({
  delegate: 'a' });
//# sourceURL=pen.js
    </script>

  




 
</body></html>