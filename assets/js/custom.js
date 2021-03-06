jQuery(document).ready(function () {
    homeBanner();
    smoothScroll();
    toggleSubmenu();
    toggleMobMenu();
    homeBannerLoggedIn();
    gamesCaruosel();
    multyModals();
    inputCheckValue();
});

;function homeBanner() {
    if ($('.hls-slider').length > 0) {
        $('.hls-slider').slick({
            dots: true,
            arrows: true,
            focusOnSelect: false,
            focusOnChange: false,
            accessibility: false,
            infinite: false,
        });
    }
}
;function gamesCaruosel() {
    if ($('.gc_carousel').length > 0) {
        $('.gc_carousel').slick({
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            focusOnSelect: false,
            focusOnChange: false,
            accessibility: false,
            infinite: true,
            variableWidth: true,
        });
    }
}
;function homeBannerLoggedIn() {
    if ($('.banner-container').length > 0) {
        $('.banner-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            focusOnSelect: false,
            focusOnChange: false,
            accessibility: false,
            infinite: false,
        });
    }
}
;function smoothScroll() {
    $('.tjc-arrow a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function () {
        });
    });
}
;function toggleSubmenu() {
    $('.with-submenu').click(function(){
       $(this).find('.submenu').slideToggle(); 
    });
}

;function toggleMobMenu() {
    $('.open_main_menu').click(function(){
        $('body').addClass('active-mob-menu');
    });
    $('.close_nav, .sidenav-overlay').click(function(){
        $('body').removeClass('active-mob-menu');
    });
}

;function multyModals() {
	$(document).on('hidden.bs.modal', function () {
		if($('.modal.fade:visible').length > 0) {
			$('body').addClass('modal-open');
		} else {
			$('body').removeClass('modal-open');
			$('body').removeAttr('style');
		}
	});
}

;function inputCheckValue() {
	$('.input-cont input, .input-cont textarea').on('change', function(){
		checker();
	});
	checker();
	function checker() {
		$('.input-cont input').each(function(){
			if($(this).val() !== '') {
				$(this).addClass('filled');
			} else {
				$(this).removeClass('filled');
			}
		});
		$('.input-cont textarea').each(function(){
			if($(this).val() !== '') {
				$(this).addClass('filled');
			} else {
				$(this).removeClass('filled');
			}
		});
	}
}