$(document).ready(function(){

	$(document).on('click input', '.main__block2 input', function(){
		var that = $(this),
			value = that.val(),
			valLength = value.length;

		if ( valLength > 0 ) {
			that.siblings('span').addClass('inputed');
		} else {
			that.siblings('span').removeClass('inputed');
		}
	});

	$(document).on('click', '.main__block1 .main__button', function(){
		$('.main__block2').addClass('openned');
		$('main').css({
			'overflow': 'auto',
			'max-height': 'unset'
		});
		$('.main__preimg--mobile').hide(300);
	});

	if ( $('.main__block2').hasClass('openned') ) {
		$('.main__preimg--mobile').hide(0);
	}

});

$(window).resize(function(){
	
})

$(window).scroll(function(){

	if($(window).scrollTop() > "50"){
		$(".nav").addClass('class');
	} else {
		$(".nav").removeClass('class');
	}

});