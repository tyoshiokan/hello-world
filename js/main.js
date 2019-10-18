
$(function(){
	$('.menu').on('click',function(){
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
	});
	$('.modal-opener').each(function() {
		new ModalTarget($(this));
	});
	$('.gallery').modaal({
			type: 'image'
	});

});