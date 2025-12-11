$( window ).on( "load", function() {
	$('[data-lazy]').each(function(){
		var that = $(this),
			lazyVideo = that.data('lazyvideo');
		that.attr('src', lazyVideo)
	})
});

$(document).ready(function(){

	// Videos Slider Init
	const videosSlider = new Swiper('.casesPage__content_videosSlider', {
		loop: false,
		slidesPerView: 1.2,
		spaceBetween: 20,
		grabCursor: true,
		breakpoints: {
			560: {
			  slidesPerView: 3,
			  spaceBetween: 30
			}
		 }
	});
	// Videos Slider Open/Close Modal
	$(document).on('click', '.casesPage__content_videosSlider .swiper-slide', function(){
		var that = $(this),
			link = that.data('link'),
			modal = $('.casesPage__videosModal'),
			modalIframe = modal.find('iframe');

		modal.addClass('openned');
		modalIframe.attr('src', link);
	});
	$(document).on('click', '.casesPage__videosModal_close', function(){
		var that = $(this);
		that.closest('.casesPage__videosModal').removeClass('openned');
		that.closest('.casesPage__videosModal').find('iframe').attr('src', '');
	})

	// Header Gradient
	if ( $(window).width() >= 768 ) {
		$('header.main').mousemove(function(e){
			var target = this.getBoundingClientRect();
			var x = e.clientX - target.left;
			var y = e.clientY - target.top;
			var windowWidth = $(window).width();
			var result = x / windowWidth * 100;

			$('header.main').attr('style', `background: linear-gradient(230deg, rgba(16,83,255,1) ${result - 50}%, rgba(0,0,0,1) ${result + 10}%)`)

			console.log(result)
		});
	}

	// IFrame 16x9 Ratio
	$('iframe').each(function(){
		var that = $(this);
		that.height( that.width() * 0.56 )
	})

	// Add Cookie
	$(document).on('click', '.cookies .js__closeCookies', function(){
		$.cookie('enter', '1', { expires: 365 });
	})
	if ( $.cookie('enter') == null ) {
		$('.cookies').removeClass('closed');
	} 


	// Change Pages for Services Page
	$(document).on('click', '.casesPage.servicesPage .casesPage__about_tag', function(){
		var that = $(this),
			index = that.index() - 1;

		$('.casesPage.servicesPage .casesPage__about_tag').removeClass('active');
		that.addClass('active');

		$('.casesPage.servicesPage .casesPage__content').css('display', 'none');
		$(`.casesPage.servicesPage .casesPage__content:eq(${index})`).css('display', 'flex');
		console.log(index)
	})

	// Case Page Donut Chart
	if ( $('.donut_circle_value').length ) {
		var circle = document.getElementsByClassName('donut_circle_value');
		setTimeout(function () {
			circle[0].setAttribute('stroke-dashoffset', 0);
		}, 0);
		$('.donut_value').each(function () {
			$(this).prop('Counter',0).animate({
			  Counter: $(this).text()
			}, {
			  duration: 1500,
			  easing: 'swing',
			  step: function (now) {
				 $(this).text(Math.ceil(now));
			  }
			});
		});
	}

	// Case Page Slider Init
	const caseSlider = new Swiper('.casesPage__content_slider', {
		loop: false,
		autoHeight: true,
		slidesPerView: 1,
		spaceBetween: 10,
		grabCursor: true,
		breakpoints: {
			560: {
			  slidesPerView: 'auto',
			  spaceBetween: 30
			}
		 }
	});

	// Dark Theme Change
	$(document).on('click', '.casesPage__about_theme .block', function(){
		$('.casesPage__about_theme .block').toggleClass('active');

		if ( $('.casesPage__about_theme .block').hasClass('active') ) {
			$('.casesPage__about_theme p').text( $('.casesPage__about_theme .block').data('light') )
			$('body').addClass('lightTheme');
		} else {
			$('.casesPage__about_theme p').text( $('.casesPage__about_theme .block').data('dark') )
			$('body').removeClass('lightTheme');
		}

	})

	// Close Cookies
	$(document).on('click', '.js__closeCookies', function(e){
		e.preventDefault();
		$('.cookies').addClass('closed')
	})

	// Open/Close Form Modal
	$(document).on('click', '.js__openForm', function(e){
		e.preventDefault();
		$('.getClients.form').addClass('openned');
	});
	$(document).on('click', '.js__closeForm', function(e){
		e.preventDefault();
		closeModalForm();
	})
	function closeModalForm(){
		$('.getClients').removeClass('openned');
	}

	// reOpenForm
	$(document).on('click', '.js__reOpenForm', function(){
		$('.getClients.request').removeClass('openned');
		$('.getClients.form').addClass('openned');
	})

	// Nav menu open init
	$(document).on('click', '.nav__menu', function(){
		$('.nav__modal').addClass('openned');
	});
	$(document).on('click', '.nav__modal_close', function(){
		closeNavMenu();
	})
	function closeNavMenu(){
		$('.nav__modal').removeClass('openned');
	}

	// About Slider Init
	const aboutSliderDuration = 5000;
	const aboutSlider = new Swiper('.about__cards_slider', {
		loop: false,
		autoplay: {
			delay: aboutSliderDuration,
		},
		allowTouchMove: false
	});
	$('.about__cards_slider').each(function(){
		var that = $(this);
	
		for ( i = 0; i < aboutSlider.slides.length / 2; i++ ) {
			that.find('.slideCounter').append(`<div class="outer"><div></div></div>`);
		}
	})
	aboutSlider.on('slideChangeTransitionEnd', function(swiper){
		var sliderLength = aboutSlider.realIndex;
	
		$(`.about__cards_slider .outer div`).stop().animate({
			width: '0%'
		}, 0);
		$(`.about__cards_slider .outer:eq(${sliderLength}) div`).animate({
			width: '100%'
		}, aboutSliderDuration, "linear");
	});

	// Photo Slider Init
	const photoSliderDuration = 5000;
	const photoSlider = new Swiper('.photoSlider', {
		loop: false,
		autoplay: {
			delay: photoSliderDuration,
		},
		allowTouchMove: false,
		autoHeight: true
	});
	$('.photoSlider').each(function(){
		var that = $(this);
	
		for ( i = 0; i < photoSlider.slides.length / 2; i++ ) {
			that.find('.photoSlider_slideCounter').append(`<div class="outer"><div></div></div>`);
		}
	})
	photoSlider.on('slideChangeTransitionEnd', function(swiper){
		var sliderLength = photoSlider.realIndex;
	
		$(`.photoSlider_slideCounter .outer div`).stop().animate({
			width: '0%'
		}, 0);
		$(`.photoSlider_slideCounter .outer:eq(${sliderLength}) div`).animate({
			width: '100%'
		}, photoSliderDuration, "linear");
	});
	
	// Grid for Cases
	var $grid = $('.cases').isotope({
		itemSelector: '.cases__item',
		layoutMode: 'masonry'
	})
	// Cases Filter
	$(document).on('click', '.filterTags .filterTags__item', function(){
		var that = $(this),
			filterName = that.data('filter');

		$('.filterTags .filterTags__item').removeClass('active');
		that.addClass('active');

		if ( filterName != '*' ) {
			$grid.isotope({ filter: `.${filterName}` })
		} else {
			$grid.isotope({ filter: `*` })
		}
		
	})

});

$(window).resize(function(){
	
})

$(window).scroll(function(){

	if($(window).scrollTop() > "50"){
		$(".nav").addClass('scrolled');
	} else {
		$(".nav").removeClass('scrolled');
	}

});