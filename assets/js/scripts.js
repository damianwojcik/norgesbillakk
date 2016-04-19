jQuery(document).ready(function($){

	// Init functions
	scrollTop_button();
	owl_init();
	mobile_menu();


	var $body = $('body'),
		$wind = $(window),
		windW = $wind.width(),
		windH = $wind.height();


	function owl_init(){
		$('.owl-carousel').owlCarousel({

			items: 1,
		    loop: true,
		    autoplay: false,
		    autoplayTimeout: 4000,
		    autoplayHoverPause: true,
		    nav: true

		});
	}


	function scrollTop_button(){
		$('.scrollTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	}

	function mobile_menu(){

		var nav = $('.mobile-navigation');
		var btn = nav.find('.nav-toggle');
		var nav_ul = nav.find('ul');

		btn.on('click',function(){
			var txt = btn.text();
			if(txt=='Menu'){
				btn.text('Close');
			}else{
				btn.text('Menu');
			}
			nav_ul.slideToggle();
		});
		
	}


});

