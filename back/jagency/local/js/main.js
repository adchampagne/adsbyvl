if ( $(window).width() <= 768 ) {
	$('.header__videos').remove()
}

if ( $('body').hasClass('mainPAGE') ) {
	var icon = new TimelineMax({paused: true, delay: 0, repeatDelay:0})
	icon.to(".f1", 5, {fill: "#D29BD2", morphSVG: {shape: ".f2", type: "rotational"}},"+=1")
		.to(".f1", 5, {fill: "#E6E6AF", morphSVG: {shape: ".f3", type: "rotational"}},"+=1")
		.to(".f1", 5, {fill: "#C8E1D7", morphSVG: {shape: ".f1", type: "rotational"}},"+=1");
}

$(window).on('scroll', function(){

	if($(window).scrollTop() > "50"){
		$(".nav").addClass('class');
	} else {
		$(".nav").removeClass('class');
	}
	
	if ( $('body').hasClass('mainPAGE') ) {
		var blockOffset = parseInt( $('.services__list').offset().top ),
			blockHeight = parseInt( $('.services__list').height() ),
			windowHeight = parseInt( $(window).height() ),
			blockWindow = blockHeight + windowHeight,
			blockHeightOffset = parseInt( blockOffset + blockHeight ),
			blockEnd = parseInt( blockHeightOffset + 0 ),
			halfBlock = parseInt( blockHeight / 2 ),
			blockPercent1 = blockHeight / 100,
			scrollTop = parseInt( $(window).scrollTop() ),
			otherBlockOffset = parseInt( blockOffset - ( blockWindow - blockHeight ) ),
			diff = blockHeightOffset - scrollTop;	

		if ( scrollTop < blockHeightOffset && scrollTop > otherBlockOffset ) {
			console.log( 1 / ( ( blockHeightOffset - otherBlockOffset ) / diff) );
			icon.progress( 1 / ( ( blockHeightOffset - otherBlockOffset ) / diff) );
		}
	}

	

});

$(window).on('load', function(){

	$('.case .video__video').height( parseInt($('.case .video__video').width()) * 0.556 );

});


function resizeCards() {
	// Why Us Cards
	$('.whyUs .whyUs__cards_item.small').height( parseInt($('.whyUs .whyUs__cards_item.small').width()) * .85 );
	$('.whyUs .whyUs__cards_item.big').height( parseInt($('.whyUs .whyUs__cards_item.big').width()) * 1.82 );
	// Header Video Cards
	$('.header__videos_item.first').height( parseInt($('.header__videos_item.first').width()) * 1.87 );
	$('.header__videos_item.second').height( parseInt($('.header__videos_item.second').width()) * ($(window).width() > 600 ? 1 : 1.5) );
	if($(window).width() > 600){
		$('.header__videos_item.second').css( 'left', ( parseInt($('.header__videos_item.second').width()) / 2 + 30 ) );
	} else {
		$('.header__videos_item.second').css( 'left', 0 );
	}
	$('.header__videos_item.third').height( parseInt($('.header__videos_item.third').width()) * 1.9 );
	$('.header__videos_item.third').css( 'margin-top', ( parseInt($('.header__videos_item.third').height()) / 2.5 ) );

	$('.header__videos_item').addClass('opacity');
	setTimeout(function(){
		$('.header__videos_item').addClass('transition');
	}, 1000)

	$('.about video').height( parseInt($('.about video').width()) * 0.566 );
}

function addOpacity(element){
	element.classList.remove("opacity");
}



resizeCards();

$(document).ready(function(){

	$("a.js__scroll").on("click", function(e){
		e.preventDefault();
		var anchor = $(this).attr('href');
		$('html, body').stop().animate({
			 scrollTop: $(anchor).offset().top - 60
		}, 800);
		$('.nav__menu').removeClass('openned');
  });

	if ( $('body').hasClass('mainPAGE') ) {
		inView('.whyUs .whyUs__cards_item')
			.on('enter', el => {
			$(el).addClass('is-inview');
		})
			.on('exit', el => {
			$(el).removeClass('is-inview');
		});
	}

	//scroll.update();

	resizeCards();

	//scroll.update();
	setTimeout(function(){
	//	scroll.update();
	}, 100)

	$(document).on('click', '.about .about__video', function(){
		var that = $(this),
			video = document.getElementById('aboutvideo');

		$('.about__video_item').css('opacity', 1);
		$('.about__video img').css('opacity', 0);

		if ( $(video).hasClass('play') ) {
			video.pause();
			$(video).removeClass('play');
		} else {
			video.play();
			$(video).addClass('play');
		}
	});

	$(document).on('click', 'nav .nav__burger', function(){
		if ( $('.nav__menu').hasClass('openned') ) {
			$('.nav__menu').removeClass('openned');
		} else {
			$('.nav__menu').addClass('openned');
		}
	});

	$(document).on('click', '.nav__menu_close', function(){
		$('.nav__menu').removeClass('openned');
	});

	if ( $('body').hasClass('mainPAGE') ) {
		var scene = document.getElementById('scene');
		var parallaxInstance = new Parallax(scene);
		var scene1 = document.getElementById('scene1');
		var parallaxInstance = new Parallax(scene1);
	}

	

	$(document).on('input click', 'footer .form__block input:not(".policy")', function(){
		var that = $(this),
			inputVal = that.val();

		if ( inputVal != "" ) {
			that.closest('label').addClass('notEmpty');
		} else {
			that.closest('label').removeClass('notEmpty');
		}
	})
	$("a.js__scroll").on("click", function(e){
		e.preventDefault();
		var anchor = $(this).attr('href');
		$('html, body').stop().animate({
			scrollTop: $(anchor).offset().top - 60
		}, 800);
		$('.nav__menu').removeClass('openned');
	});

	

	
});

$(window).on('resize', function(){
	resizeCards();
})


$(window).on('load', function(){

	
	const swiper = new Swiper('.swiper', {
		speed: 400,
		spaceBetween: 100,
		effect: 'creative',
		creativeEffect: {
			prev: {
				// will set `translateZ(-400px)` on previous slides
				translate: [0, 0, -400],
			},
			next: {
				// will set `translateX(100%)` on next slides
				translate: ['100%', 0, 0],
			},
		},
		autoplay: {
			delay: 5000,
		},
		speed: 1000,
		loop: true,
		allowTouchMove: false
	});



	resizeCards();

	
	
	if ( $('body').hasClass('mainPAGE') ) {
		document.getElementById('myvideo1').play();
		document.getElementById('myvideo2').play();
		document.getElementById('myvideo3').play();
		setTimeout(function(){
			document.getElementById('myvideo1').play();
			document.getElementById('myvideo2').play();
			document.getElementById('myvideo3').play();
		}, 2000)
	}

	//scroll.update();
	//setTimeout(function(){
	//	scroll.update();
	//}, 100)

	

	setTimeout(function(){
	//  	scroll.init();
		console.log('update')
	}, 3000)
	
	var countUpdate = 1;

	//scroll.on('scroll', function(args){
		//console.clear();
		//console.log(obj);
		//console.log(args);
	//	if(typeof args.currentElements['el3'] === 'object') {
	//		let progress = args.currentElements['el3'].progress;
			// console.log(progress);
			// ouput log example: 0.34
			// gsap example : myGsapAnimation.progress(progress);
			
	//		if(progress > 0.1 && progress < 0.2 && countUpdate == 1) {
	//			scroll.update();
	//			countUpdate = 0;
	//		}

	//		icon.progress(progress);

			
	//	}
	//});
	
})



$(window).resize(function(){
	//scroll.update();
	setTimeout(function(){
		//scroll.update();
	}, 1500)
})

