$( document ).ready(function() {

	$(window).scroll(function () {
		if ($(window).scrollTop() >= 350) {
            $('.header__sticky').show();
			$('.header__sticky').addClass('open');
			$('.header__sticky').removeClass('closed');
		} else {
			$('.header__sticky').removeClass('open');
			$('.header__sticky').addClass('closed');
		}
	})

    $(document).on('click', '.main-menu__item', function () {
        $(this).next(".main-menu__dropdown-menu").slideToggle();
        $(this).parents(".main-menu__dropdown").toggleClass('active');
    });


    $(document).on('click', '.js-plus', function () {
        $(this).prev().val(+$(this).prev().val() + 1);
    });
    $(document).on('click', '.js-minus', function () {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    });
    $(document).on('click', '[data-modal]', function () {
        const modal = $(this).data('modal');
        openModal($(modal));
    });
    $(document).on('click', '[data-modal-close]', function (e) {
        e.stopPropagation();
        const modal = $(this).parents('.modal');
        $(modal).addClass('closing');
        setTimeout(function(){
            $(modal).removeClass('closing');
            closeModal($(modal));
        }, 300);
    });
    $(document).on('click', '.modal', function (e) {
        e.stopPropagation();
        if (!$(e.target).closest('.modal__wrapper').length) {
            $(this).addClass('closing');
            setTimeout(function(){
                $(e.target).removeClass('closing');
                closeModal($(e.target));
            }, 300);
        }
    });
    function openModal(modal) {
        modal.addClass('show');
        $('html').addClass('overflow-hidden');
    }
    function closeModal(modal) {
        modal.removeClass('show');
        $('html').removeClass('overflow-hidden');
    }

    $('.dropdown-toggle').click(function() { 
        // $(this).next('.dropdown-menu').fadeToggle();
        // $(this).next('.dropdown-menu').toggle();
        $(this).toggleClass("show");
        $(this).next('.dropdown-menu').toggleClass("show");
    });
      
    $(document).click(function(e) { 
        var target = e.target; 
        if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) { 
            // $('.dropdown-menu').fadeOut();
            // $('.dropdown-menu').hide();
            $('.dropdown-menu').removeClass("show");
            $('.dropdown-toggle').removeClass("show");
        }
    });

    new Swiper(".sw__main-slider", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });
    new Swiper(".sw__related-products", {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
    var sw_thumbs = new Swiper(".sw__product-thumbs", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    new Swiper(".sw__products", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: sw_thumbs,
        },
    });

    new WOW().init();
    Fancybox.bind('[data-fancybox="gallery"]', {});   
});