// GSAP Init
gsap.registerPlugin(ScrollTrigger);


// Start Functions - SF
// SF - Font-Size Changer by Parent Offset Width
function viewForFontSize(parentContainer, number, textBlock) {
	var fontSize = $(parentContainer).width() / number;
	$(textBlock).css({'font-size': fontSize + 'px'})
}
function viewForHeight(parentContainer, number, block) {
	var height = $(parentContainer).width() / number;
	$(block).css({'height': height + 'px'})
}
function viewForBorderWidth(parentContainer, number, block) {
	var borderWidth = $(parentContainer).width() / number;
	$(block).css({'border-width': borderWidth + 'px'})
}
function viewForMargins(parentContainer, mgt, mgr, mgb, mgl, block) {
	$(block).css({
		'margin': `${mgt != 0 ? $(parentContainer).width() / mgt : 0}px 
						${mgr != 0 ? $(parentContainer).width() / mgr : 0}px 
						${mgb != 0 ? $(parentContainer).width() / mgb : 0}px  
						${mgl != 0 ? $(parentContainer).width() / mgl : 0}px `
	})
}
// SF - Cards Padding Changer
function viewForPadding(parentContainer, pdt, pdr, pdb, pdl, blockWithPadding) {
	$(blockWithPadding).css({
		'padding': `${pdt != 0 ? $(parentContainer).width() / pdt : 0}px 
						${pdr != 0 ? $(parentContainer).width() / pdr : 0}px 
						${pdb != 0 ? $(parentContainer).width() / pdb : 0}px 
						${pdl != 0 ? $(parentContainer).width() / pdl : 0}px`
	})
}
// SF - Cards Border Radius Changer
function viewForBorderRadius(parentContainer, brr, blockWithBRR) {
	$(blockWithBRR).css({
		'border-radius': `${$(parentContainer).width() / brr}px`
	})
}
// SF - View for elements CSS
function viewForElementsFunctions(){
	if ( $(window).width() > 560 ) {
		viewForFontSize('.menu__wrapper', 16.5, '.menu__links_item, .menu__links_item--big p'); // 116px
		viewForFontSize('.menu__wrapper', 74, '.menu__links_item--big a'); // 26px
		viewForFontSize('.menu__wrapper', 92, '.menu__links_item--desc p'); // 21px
		viewForFontSize('.menu__wrapper', 130, '.menu__links_item--spacer'); // 16px
		viewForMargins('.menu__wrapper', 0, 0, 59, 0, '.menu__links_item--big p'); // 32px
		viewForMargins('.menu__wrapper', 101, 0, 0, 0, '.menu__links_row + *'); // 20px
		viewForMargins('.menu__wrapper', 0, 0, 0, 101, '.menu__links_item + *'); // 20px
		viewForMargins('.menu__wrapper', 190, 0, 0, 0, '.menu__links_item--big .links .row:last-child'); // 10px
		viewForMargins('.menu__wrapper', 0, 0, 0, 190, '.menu__links_item--big .links .row a + *'); // 10px
		viewForPadding('.menu__wrapper', 190, 107, 190, 107, '.menu__links_item--big .links .row a'); // 10px 18px
		viewForPadding('.menu__wrapper', 101, 59, 59, 59, '.menu__links_item--white'); // 10px 18px
		viewForPadding('.menu__wrapper', 54, 107, 60, 88, '.menu__links_item--big'); // 36px 18px 32px 22px
		viewForBorderRadius('.menu__wrapper', 60, '.menu__links_item--big, .menu__links_item--white'); // 24px
		viewForBorderRadius('.menu__wrapper', 240, '.menu__links_item--big .links .row a'); // 8px
	}
	if ($('.headerAbout').length && $(window).width() > 560 && !$('body').hasClass('inner')) {
		viewForFontSize('.menu__wrapper', 39.52, '.headerAbout__item--bigText p, .casesCards__item_title'); // 48px
		viewForFontSize('.menu__wrapper', 53.2, '.headerAbout__item_bottomText'); // 36px
		viewForFontSize('.menu__wrapper', 59, '.headerAbout__item_text, .casesCards__item_desc, .headerAbout__item_getClientsButton span'); // 32px
		viewForFontSize('.menu__wrapper', 37, '.headerAbout__item_watchCreo div'); // 52px
		viewForFontSize('.menu__wrapper', 100, '.headerAbout__item_button'); // 26px
		viewForFontSize('.menu__wrapper', 101, '.headerAbout__item_menuButton p'); // 19px
		viewForHeight('.menu__wrapper', 16.84, '.headerAbout__item_menuButton'); // 116px
		viewForPadding('.menu__wrapper', 170, 57, 170, 57, '.headerAbout__item_button'); // 9px 28px
		viewForPadding('.menu__wrapper', 45, 37.4, 45, 37.4, '.headerAbout__item > div, .headerAbout__item_getClientsButton'); // 42px 50px
		viewForMargins('.menu__wrapper', 0, 0, 101, 0, '.headerAbout__item_menuButton'); // 19px
		viewForMargins('.menu__wrapper', 0, 0, 0, 85, '.headerAbout__item + *'); // 16px
		viewForMargins('.menu__wrapper', 92, 0, 0, 0, '.headerAbout__item_watchCreo > * + *'); // 12px
		viewForBorderWidth('.menu__wrapper', 500, '.headerAbout__item_watchCreo div'); // 4px
		viewForBorderRadius('.menu__wrapper', 35.5, '.headerAbout__item, .headerAbout__item_getClientsButton'); // 54px
		viewForBorderRadius('.menu__wrapper', 80, '.headerAbout__item_watchCreo div'); // 24px
		$('.headerAbout__item_menuButton .plus').css({
			right: `${$('.menu__wrapper').width() / 80}px`
		})
	}	
	if ($('.headerAbout').length && $(window).width() > 560 && $('body').hasClass('inner')) {
		viewForFontSize('.headerAbout .wrapper-min', 14.8, '.headerAbout__item_text--bigBGText'); // 76px - wrapper-min
		viewForFontSize('.headerAbout .wrapper-min', 45, '.headerAbout__item_bottomText'); // 36px
	}	
	if ($('.aboutUsCards').length && $(window).width() > 560 && $('body').hasClass('inner')) {
		viewForFontSize('.aboutUsCards .wrapper', 40, '.aboutUsCards__item--lineBG .aboutUsCards__item_title, .aboutUsCards__item--blueBG .aboutUsCards__item_title'); // 47px - wrapper
		viewForFontSize('.aboutUsCards .wrapper', 65, '.aboutUsCards__item_list li'); // 32px - wrapper
		viewForFontSize('.aboutUsCards .wrapper', 17, '.aboutUsCards__item--whiteBG .aboutUsCards__item_title'); // 32px - wrapper
		viewForBorderRadius('.aboutUsCards .wrapper', 35.5, '.aboutUsCards__item'); // 54px
		viewForPadding('.aboutUsCards .wrapper', 45, 37.4, 45, 37.4, '.aboutUsCards__item'); // 42px 50px
	}
	if ($('.casesCards').length && $(window).width() > 560) {
		viewForPadding('.menu__wrapper', 45, 37.4, 45, 37.4, '.casesCards__item > div'); // 42px 50px
	}
	if ($('.customersText').length && $(window).width() > 560) {
		viewForFontSize('.menu__wrapper', 19.6, '.customersText__paragraph'); // 98px
		viewForPadding('.customersText .wrapper', 85, 49, 85, 49, '.customersText__paragraph span'); // 42px 50px
		viewForBorderRadius('.customersText .wrapper', 49, '.customersText__paragraph span'); // 24px
		viewForMargins('.menu__wrapper', 0, 150, 0, 150, '.customersText__paragraph span'); // 12px
	}
	if ($('.advantagesTextSlider').length && $(window).width() > 560) {
		viewForFontSize('.menu__wrapper', 9.35, '.advantagesTextSlider__sliderItem h4'); // 116px
		viewForFontSize('.menu__wrapper', 59, '.advantagesTextSlider__sliderItem p:not(.bgText)'); // 32px
	}
	if ($('.formBlock').length && $(window).width() > 560) {
		viewForFontSize('.formBlock .wrapper-min', 22, '.formBlock__title'); // 48px - wrapper-min
		viewForFontSize('.formBlock .wrapper-min', 35, '.formBlock__desc'); // 32px - wrapper-min
		viewForFontSize('.formBlock .wrapper-min', 56, '.UIinput--text, .UIinput--textarea'); // 20px - wrapper-min
		viewForFontSize('.formBlock .wrapper-min', 70, '.UIinput--checkbox + div + p'); // 16px - wrapper-min
		viewForPadding('.formBlock .wrapper-min', 56, 37, 56, 37, '.UIinput--text, .UIinput--textarea'); // 20px 30px - wrapper-min
		viewForPadding('.formBlock .wrapper-min', 27, 22, 27, 22, '.formBlock__formContainer'); // 42px 50px - wrapper-min
		viewForBorderRadius('.formBlock .wrapper-min', 21, '.formBlock__formContainer'); // 24px - wrapper-min
		viewForBorderRadius('.formBlock .wrapper-min', 62, '.UIinput--text, .UIinput--textarea'); // 18px - wrapper-min
		viewForHeight('.formBlock .wrapper-min', 19.4, '.UIinput--text'); // 58px - wrapper-min
		viewForMargins('.formBlock .wrapper-min', 112, 0, 0, 0, '.formBlock__label + *'); // 10px - wrapper-min
		$('.formBlock__left, .formBlock__right').css({
			'width': `calc(50% - ${$('.formBlock .wrapper-min').width() / 11.25}px)`
		})
	}
	if ($('.footer').length && $(window).width() > 560) {
		viewForFontSize('.footer .wrapper-min', 35, '.footer__card--mail, .footer__card--linked'); // 32px - wrapper-min
	}
	if ($('.team').length && $(window).width() > 560) {
		viewForFontSize('.team .wrapper', 59, '.team__item_title'); // 32px - wrapper-min
	}
	if ($('.visitHR').length && $(window).width() > 560) {
		viewForFontSize('.visitHR .wrapper-min', 35, '.headerAbout__item_text'); // 32px - wrapper-min
	}
	if ( $('.servicesCards').length && $(window).width() > 560 ) {
		viewForFontSize('.servicesCards .wrapper-middle', 46, '.servicesCards__item_desc'); // 32px - wrapper-min
		viewForFontSize('.servicesCards .wrapper-middle', 31, '.servicesCards__item_title, .servicesCards__item--titleBlock h3'); // 48px - wrapper-middle
		viewForBorderRadius('.servicesCards .wrapper-middle', 27, '.servicesCards__item'); // 54px - wrapper-middle
		viewForBorderRadius('.servicesCards .wrapper-middle', 57, '.servicesCards__item_creative'); // 26px - wrapper-middle
		viewForPadding('.servicesCards .wrapper-middle', 35, 30, 35, 30, '.servicesCards__item'); // 42px 50px - wrapper-middle
	}
	if ( $('.descriptionCards__item').length && $(window).width() > 560 ) {
		viewForBorderRadius('.descriptionCards .wrapper-min', 28, '.descriptionCards__item'); // 40px - wrapper-min
		viewForPadding('.descriptionCards .wrapper-min', 40, 33, 40, 33, '.descriptionCards__item'); // 28px 34px - wrapper-min
		viewForFontSize('.descriptionCards .wrapper-min', 23.4, '.descriptionCards__item_title'); // 48px - wrapper-min
		viewForFontSize('.descriptionCards .wrapper-min', 35, '.descriptionCards__item_desc'); // 32px - wrapper-min
		viewForMargins('.descriptionCards .wrapper-min', 0, 0, 93, 0, '.descriptionCards__item_title'); // 0 0 12px 0 - wrapper-min
	}
	if ( $('.innerText__listsCards').length && $(window).width() > 560 ) {
		viewForBorderRadius('.innerText .wrapper-min', 28, '.innerText__listsItem'); // 40px - wrapper-min
		viewForPadding('.innerText .wrapper-min', 40, 33, 17.5, 33, '.innerText__listsItem'); // 28px 34px 64px 34px - wrapper-min
		viewForFontSize('.innerText .wrapper-min', 23.4, '.innerText__listsItem_title'); // 48px - wrapper-min
		viewForFontSize('.innerText .wrapper-min', 43, '.innerText__listsItem_ul li'); // 26px - wrapper-min
		viewForMargins('.innerText .wrapper-min', 0, 0, 93, 0, '.innerText__listsItem_title'); // 0 0 12px 0 - wrapper-min
	}
	if ( $('.pricingCards').length && $(window).width() > 560 ) {
		viewForBorderRadius('.pricingCards .wrapper-min', 21.5, '.pricingCards__item'); // 52px - wrapper-min
		viewForFontSize('.pricingCards .wrapper-min', 9.53, '.pricingCards__item_rotatedTitle h3'); // 116px - wrapper-min
		viewForFontSize('.pricingCards .wrapper-min', 58, '.pricingCards__item_rotatedTitle p'); // 19px - wrapper-min
		viewForFontSize('.pricingCards .wrapper-min', 43, '.pricingCards__item_desc'); // 26px - wrapper-min
		viewForPadding('.pricingCards .wrapper-min', 31, 31, 10.8, 31, '.pricingCards__item_desc'); // 28px 34px 64px 34px - wrapper-min
	}
}
// SF - Main Menu BG Line - Get Total Dasharray/Dashoffset Length
function mainMenuGetSVGTotalLength(play) {
	var mainMenuPathLength = $('.menu__bgLine path')[0].getTotalLength();
	$('.menu__bgLine path').css({
		'stroke-dasharray': mainMenuPathLength,
		'stroke-dashoffset': mainMenuPathLength
	})
	if ( play == true ) {
		gsap.to($('.menu__bgLine path'), { duration: 1, strokeDashoffset: 0 });
	}
}
// SF - Main Menu - Open/Close Animation
function menuClickTrigger(reverse) {
	gsap.timeline().to('.menu', {
		'background-color': `rgba(30, 30, 30, ${reverse == true ? 0 : 1})`,
		'pointer-events': reverse == true ? 'none' : 'auto',
		duration: reverse == true ? .1 : .2,
		ease: "power1.out"
	}, reverse == true ? .4 : 0).to('.menu__bgLine path', { 
		duration: reverse == true ? .55 : 2, 
		strokeDashoffset: reverse == true ? $('.menu__bgLine path')[0].getTotalLength() : 0
	}, reverse == true ? .1 : .2).to('.menu__links_item', { 
		duration: reverse == true ? .1 : .3, 
		scale: reverse == true ? .5 : 1,
		opacity: reverse == true ? 0 : 1,
		stagger: reverse == true ? .05 : .1,
		reversed: reverse == true ? false : true,
	}, reverse == true ? 0 : .1).to('.menu__links_item--big a', { 
		duration: reverse == true ? .05 : .2, 
		scale: reverse == true ? .5 : 1,
		opacity: reverse == true ? 0 : 1,
		stagger: reverse == true ? .05 : .13,
		reversed: reverse == true ? false : true,
	}, reverse == true ? 0 : .6).to('.menu__nav_logo', { 
		duration: reverse == true ? .3 : .2, 
		opacity: reverse == true ? 0 : 1
	}, reverse == true ? .2 : .6).to('.menu__nav_button', { 
		duration: reverse == true ? .3 : .2, 
		opacity: reverse == true ? 0 : 1
	}, reverse == true ? 0 : .7);
	$('.menu__nav > *').css({'pointer-events': reverse == true ? 'none' : 'auto'});
}




$(document).ready(function(){

	// Inits
	// Tilt.js init
	if ( $(window).width() > 1024 ) {
		$('.JS__tiltInit').tilt({
			glare: true,
			maxGlare: .5,
			scale: 1.1
		})
	}
	if ( $('.advantagesTextSlider').length ) {
		const advantagesTextSlider = new Swiper('.advantagesTextSlider__sliderContainer', {
			loop: true,
			allowTouchMove: true,
			autoHeight: true,
			autoplay: {
				delay: 3000,
			},
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			pagination: {
				  el: '.swiper-pagination',
			}
		});
	}

	mainMenuGetSVGTotalLength();
	if ( $(window).width() > 560 ) {
		viewForElementsFunctions();
	}

	// Creative video modal trigger
	$(document).on('click', '.JS__openVerticalVideoModal', function(){
		var modaType = $(this).data('video-modal-type')
			modalSrc = $(this).find('video').attr('src')
			videoSrc = $(this).data('video-src')
			modal = $('.modal.videoCreative')
			modalIFrame = $('.modal.videoCreativeYoutube')

		$('body').css('padding-right', window.innerWidth-$(window).width()).addClass('blocked');
		if ( $(this).hasClass('JS__openVerticalVideoModalHorizontal') ) {
			modal.addClass('horizontal')
		}
		if ( modaType == 'iframe' ) {
			modalIFrame.addClass('openned horizontal');
			modalIFrame.find('iframe').attr('src', videoSrc);
		} else {
			modal.find('video.modal__video').attr('src', modalSrc);
			modal.addClass('openned');
		}
	})
	$(document).on('click', '.modal__close', function(){
		var modal = $(this).closest('.modal')
		modal.removeClass('openned horizontal')
		setTimeout(function(){
			modal.find('.modal__video').attr('src', '')
		},350)
		$('body').css('padding-right', 0).removeClass('blocked');
	})
	$(document).on('click', '.headerAbout__item_getClientsButton', function(){
		$("html, body").animate({
			scrollTop: $('.formBlock').offset().top
	  	}, {
			duration: 1000,
			easing: "swing"
	  	});
	})
	$(document).on('click', '.nav__getClients', function(e){
		if ( !$('body').hasClass('inner') ) {
			$("html, body").animate({
				scrollTop: $('.formBlock').offset().top
			  }, {
				duration: 1000,
				easing: "swing"
			});
		} else {
			$('.modal.form').addClass('openned');
		}
	})
	// Main Menu - Open
	$(document).on('click', '.headerAbout__item_menuButton, .nav__openMenu', function(){
		mainMenuGetSVGTotalLength();
		menuClickTrigger()
		$('body').css('padding-right', window.innerWidth-$(window).width()).addClass('blocked');
	})
	// Main Menu - Close
	$(document).on('click', '.menu__nav_button', function(){
		menuClickTrigger(true);
		$('body').css('padding-right', 0).removeClass('blocked');
	})
	// Header Links - Open/Close
	$(document).on('click', '.header__linksList', function(){
		$(this).toggleClass('openned')
	});
	// Header Click Out Element
	$(document).mouseup( function(e){
		var div = $( ".header__linksList" );
		if ( !div.is(e.target) && div.has(e.target).length === 0 ) {
			div.removeClass('openned');
		}
	});

	if ($('.innerText__videoBallon').length) {
		gsap.fromTo('.innerText__videoBallon', {y: $(window).width() > 560 ? 250 : 50}, { 
			y: $(window).width() > 560 ? -250 : -50,
			scrollTrigger: {
				trigger: '.innerText__fullWidthIMG',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
	  	});
	}
	if ($('.processTextBlock__titleImg').length) {
		gsap.fromTo('.processTextBlock__titleImg', {y: 250}, {
			y: -250,
			scrollTrigger: {
				trigger: '.processTextBlock',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
	  	});
	}
	if ($('.innerText__eventMiniIMG').length) {
		gsap.fromTo('.innerText__eventMiniIMG', {y: $(window).width() > 560 ? -250 : -50}, {
			y: $(window).width() > 560 ? 250 : 50,
			scrollTrigger: {
				trigger: '.innerText__fullWidthIMG',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
	  	});
	}
	if ($('.customersText').length) {
		gsap.fromTo('.customersText__img--topLeft', { y: $(window).width() > 560 ? 100 : 50 }, {
			y: $(window).width() > 560 ? -100 : -50,
			scrollTrigger: {
				trigger: '.customersText',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
	  });
	  gsap.fromTo('.customersText__img--topRight', { y: 150 }, {
			y: -150,
			scrollTrigger: {
				trigger: '.customersText',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
		});
		gsap.fromTo('.customersText__img--bottomLeft', { y: 150 }, {
			y: 0,
			scrollTrigger: {
				trigger: '.customersText',
				start: 'top bottom',
				end: 'bottom top',
				invalidateOnRefresh: true,
				scrub: 2
			}
		});
	}
	if ( $('path').length ) {
		gsap.utils.toArray('path').forEach(target => {
			if ( !$(target).closest('svg').hasClass('menu__bgLine') ) {
				$(target).css({
					'stroke-dasharray': $(target)[0].getTotalLength(),
					'stroke-dashoffset': $(target)[0].getTotalLength()
				});
				gsap.to(target, {
					strokeDashoffset: 0,
					scrollTrigger: {
						trigger: $(target).closest('div'),
						start: 'top bottom',
						end: 'bottom top',
						invalidateOnRefresh: true,
						scrub: 2
					}
				});
			}
		});
	}
	if ( $('.innerText__flyLabel').length ) {
		gsap.utils.toArray('.innerText__flyLabel').forEach(target => {
			gsap.from(target, {
				y: $(window).width() > 560 ? '100vh' : '100vh',
				rotate: function(){
					var degrees = 0
					if ( $(target).hasClass('innerText__flyLabel--rotate13') ) {
						degrees = $(window).width() > 560 ? 0 : -33
					} else if ( $(target).hasClass('innerText__flyLabel--rotate20') ) {
						degrees = $(window).width() > 560 ? 10 : -70
					} else {
						degrees = 0
					}
					return degrees
				},
				scrollTrigger: {
					trigger: $(target).closest('.innerText'),
					start: 'top bottom',
					end: $(window).width() > 560 ? 'bottom center' : 'bottom top',
					invalidateOnRefresh: true,
					scrub: 1
				}
			});
	  	});
	}
	if ( $('.processTextBlock__flyLabel').length ) {
		gsap.utils.toArray('.processTextBlock__flyLabel').forEach(target => {
			gsap.from(target, {
				y: $(window).width() > 560 ? '100vh' : '100vh',
				rotate: function(){
					var degrees = 0
					if ( $(target).hasClass('processTextBlock__flyLabel--rotate13') ) {
						degrees = $(window).width() > 560 ? 0 : -33
					} else if ( $(target).hasClass('processTextBlock__flyLabel--rotate20') ) {
						degrees = $(window).width() > 560 ? 10 : -70
					} else {
						degrees = 0
					}
					return degrees
				},
				scrollTrigger: {
					trigger: $(target).closest('.processTextBlock'),
					start: 'top bottom',
					end: $(window).width() > 560 ? 'bottom center' : 'bottom top',
					invalidateOnRefresh: true,
					scrub: 1
				}
			});
	  	});
	}
	if ( $('.servicesCards').length ) {
		gsap.fromTo('.servicesCards__item', { opacity: 0, y: 200 }, {
			opacity: 1,
			y: 0,
			stagger: .1
		});
		gsap.utils.toArray('.servicesCards__item--bordered').forEach(target => {
			gsap.from(target, {
				rotate: 0,
				scrollTrigger: {
					trigger: target,
					start: 'center bottom',
					end: 'top center',
					invalidateOnRefresh: true,
					scrub: 1
				}
			});
	  	});
	}
	if ( $('.processTextBlock').length && $(window).width() > 900 ) {
		$('.processTextBlock .processTextBlock__list').each(function(){
			$(this).css({
				'max-height': $(this).height() / 2 * 1.1 + 'px'
			})
		})
	}

	$(document).on('click focus mouseover', 'form', function(e){
		if ( $(this).find('.UIinput--checkbox').prop('checked') == false ) {
			$(this).find('.checkboxError').css('opacity', '1')
		} else {
			$(this).find('.checkboxError').css('opacity', '0')
		}
	})

	// Eye mouse
	if ( $(window).width() > 560 ) {
		$('.customersText--eyeTrigger').mousemove(function (e) {

			var item = $(this);
			var element = item.find('.customersText__eye_fg');
			var shadow = item.find('.postit-shadow');
			
			var item = $(this).offset();
			var xPos = e.pageX - item.left;
			var yPos = e.pageY - item.top;
	
			var itemWidth  = $(this).width();
			var itemHeight = $(this).height();
			
			var mouseX = Math.round(((xPos / itemWidth ) * 100) - 50);
			var mouseY = Math.round(((yPos / itemHeight) * 100) - 50);
	
			element.delay(300).css({'transform': 'rotateX(' + -mouseY + 'deg) rotateY(' + mouseX + 'deg) translate('+ mouseX * 1.2 + 'px,' + mouseY + 'px)'});
			shadow.delay(300).css({'transform': 'rotateX(' + -(mouseY + 5) + 'deg) rotateY(' + (mouseX + 5) + 'deg)'});
	
			function noAni(){
				element.css({'transition': 'none'});
				shadow.css({'transition': 'none'});
			}
	
			$(this).on("mouseenter", (function (e) {
				element.css({'transition': 'all .1s ease-out'});
				shadow.css({'transition': 'all .1s ease-out'});
				setTimeout(noAni, 200);
			}))
	
			$(this).on("mouseleave", (function (e) {
				element.css({'transform': 'rotateX(0deg) rotateY(0deg)', 'transition': 'all .1s ease-out'});
				shadow.css({'transform': 'rotateX(0deg) rotateY(0deg)', 'transition': 'all .1s ease-out'});
				setTimeout(noAni, 200);
			}))
	
		});
	}
	


	
});

$(window).on('resize', function(){
	if ( $(window).width() > 560 ) {
		viewForElementsFunctions();
	}
})