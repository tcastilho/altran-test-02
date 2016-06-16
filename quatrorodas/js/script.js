(function($) {
	var behaviors = {};
	behaviors = {
		init: function() {
			this.menuOnScroll();
			this.mobileMenu();
			this.scrollSearch();
		},
		menuOnScroll: function() {
			$(window).scroll(function(){
				var secondMenu = $('header .second-menu');
				var scrollTop = $(document).scrollTop();

				if(scrollTop>=10){
					secondMenu.addClass('hidden');

				}else if(scrollTop<10){
					secondMenu.removeClass('hidden');
				}
			});
		},
		mobileMenu: function() {
			$('.mobile-menu').click(function() {
				if($(this).hasClass('close')) {
					$(this).addClass('open');
					$(this).removeClass('close');
				} else if($(this).hasClass('open')) {
					$(this).addClass('close');
					$(this).removeClass('open');
				}
			});
		},
		scrollSearch: function() {
			var hiddedForm = $('.form-control');
			$('a.search').click(function(e) {
				e.preventDefault();
				if($(this).hasClass('closed')) {
					hiddedForm.animate({
						"left": "+=300px"
					}, 750);
					$(this).removeClass('closed');
					$(this).addClass('opened');
				} else if($(this).hasClass('opened')) {
					hiddedForm.animate({
						"left": "-=300px"
					}, 750);
					$(this).removeClass('opened');
					$(this).addClass('closed');
				}
			});
		}
	};
	$(document).ready(function() {
		behaviors.init();
	});
})(jQuery);