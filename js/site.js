(function ($) {

  $(document).on('ready',function() {

  	// SMOOTH SCROLLING ANCHOR LINKS
	  $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });

    // ADD CLASS TO HEADER ON SCROLL
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
//       console.log(scroll);
      if (scroll <= 250) {
        $("header#site-header").removeClass("scrolled");
      } else {
        $("header#site-header").addClass("scrolled");
      }
    });
    $(window).scroll();

    // MOBILE NAV
    $('#mobile-menu-close').appendTo('.sliding-panel-content');
    $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
      $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
      e.preventDefault();
    });

    //TOOLTIPSTER
    $('.tooltip').tooltipster({
      theme: ['tooltipster-base', 'custom'],
      trigger:"custom",
      triggerOpen: {
        mouseenter: true,
        touchstart: true
      },
      triggerClose: {
        mouseleave: true,
        scroll: true,
        tap: true
      }
    });
    

    //Magnific Lightbox
    $('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: false,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });


  });

})(jQuery);
