/**
 * navigation + jquery
 */
( function() {
	var container, button, menu, links, subMenus;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( var i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();


(function($){
     'use strict';

$(document).ready(function($) {
   
if (typeof $.fn.slick === 'function'){
// // Slick slider
$('.format-gallery .gallery').slick({
  //dots: true,
  infinite: true,
  //autoplay: true,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.pencil-featured-slider').slick({
  //dots: true,
  infinite: true,
  autoplay: Boolean(penciletto.home_page_slider_autoplay),
  autoplaySpeed: Number(penciletto.home_page_slider_play_speed),
  speed: 3000,
  slidesToShow: Number(penciletto.home_page_slider_img_number),
  slidesToScroll: 1,
  //centerMode: true,
  //centerPadding: '50px',
  adaptiveHeight: true,
  //variableWidth: true,
  //slidesPerRow: 2,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        //variableWidth: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}

// Top search panel
var $pencilSearchPanel = $('.pencil-search-panel');
    $('.search-toggle').click(function(){
        $pencilSearchPanel.slideToggle(0).css('z-index', '1001');
        });
    $('.pencil-search-panel-close').click(function(){
        $pencilSearchPanel.slideToggle(0).css('z-index', '');
        });
        

//Sticky menu
var $pencilSiteNavigation = $('#masthead');
var stickyMenuTop = $pencilSiteNavigation.offset().top;
var stickyMenu = function(){
var scrollTop = $(window).scrollTop();
if (scrollTop > stickyMenuTop) { 
    $pencilSiteNavigation.css({'position': 'fixed', 'top': '0', 'left': '0', 'right': '0', 'z-index': '1000'});
} else {
    $pencilSiteNavigation.css({'position': '', 'top': '', 'left': '', 'right': '', 'z-index': ''});
}
};

stickyMenu();

$(window).scroll(function() {
            stickyMenu();
});

	var container, button, menu, body, toggledBg;

	container = $( '#site-navigation' );

	button = $( '.menu-toggle' );

	menu = $('#toggled-navbar-bg .nav-menu');

        body = $( '.wordpress' );
        
        toggledBg = $('#toggled-navbar-bg');

        //menu.prepend('<div id="toggled-menu-close"><button><span class="fa fa-close fa-large"></button></span></div>').toggle(500);

        button.click(function(){
            if(container.hasClass('toggled')){

                body.removeClass('overflow-hidden');
                button.attr( 'aria-expanded', 'false' );
		menu.attr( 'aria-expanded', 'false' ).css('display', '');
                menu.parent().css('display', '');
                toggledBg.css('display', '');
                container.removeClass('toggled');
                
            } else {

                pencilMenuOnShow();
   
            }
        });
        
var pencilMenuOnShow = function() {
    var closeButton = $('#toggled-menu-close');
    var toggledBg = $('#toggled-navbar-bg');
    
    container.addClass('toggled');
    body.addClass('overflow-hidden');
    button.attr( 'aria-expanded', 'true' );
    toggledBg.css('display', 'block');
    menu.prepend('<div id="toggled-menu-close"><button><span class="fa fa-close fa-large"></button></span></div>').css('display', 'block').attr( 'aria-expanded', 'true' ).parent().css('display', 'block');
    closeButton.click( function() {
                            pencilMenuOnHide();                            
                        });
    toggledBg.click( function() {
                            pencilMenuOnHide();   
                        });
};
        
var pencilMenuOnHide = function() {
    var closeButton = $('#toggled-menu-close');
    menu.css('display', '').attr( 'aria-expanded', 'false' ).parent().css('display', '');
    //menu.attr( 'aria-expanded', 'false' ).css('display', '');
    button.attr( 'aria-expanded', 'false' );
    //menu.parent().css('display', '');
    toggledBg.css('display', '');
    body.removeClass('overflow-hidden');
    container.removeClass('toggled');
    closeButton.remove();
};
    
});
/*
var pencilWidth = $(window).width();
$(window).resize(function(){
   if($(this).width() !== pencilWidth){
      location.reload();
   }
});
*/
})(jQuery);

//window.onresize = function(){ location.reload(); };