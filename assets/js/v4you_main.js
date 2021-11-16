
$('#mainHeader').removeClass('bg-light os-fixed-menu');
$('#mainHeader').removeClass('fixed-top');
$('#brand').addClass('d-none');
$('#header-items').addClass('mx-auto');
$('#header-items').removeClass('ms-auto');

$('#header-items li').addClass('col-lg').addClass('p-0');

$(window).scroll(function () {

    var scrolled = $(this).scrollTop();

    let heightViewPort = $(window).height();
    console.log(heightViewPort);
    if ($(window).width() > 767) {

        if (scrolled > heightViewPort) {
            $('#mainHeader').addClass('bg-light os-fixed-menu');
            $('#mainHeader').addClass('fixed-top');
            $('#brand').removeClass('d-none');
            $('#header-items').addClass('ms-auto');
            $('#header-items').removeClass('mx-auto');
            $('#mainHeader').removeClass('navbar-expand');
            $('#mainHeader').addClass('navbar-expand-lg');

        } else {
            $('#mainHeader').removeClass('bg-light os-fixed-menu');
            $('#mainHeader').removeClass('fixed-top');
            $('#brand').addClass('d-none');
            $('#header-items').addClass('mx-auto');
            $('#header-items').removeClass('ms-auto');
            $('#mainHeader').addClass('navbar-expand');
            $('#mainHeader').removeClass('navbar-expand-lg');
        }

    } else{
        $('#mainHeader').addClass('bg-light os-fixed-menu');
        $('#mainHeader').addClass('fixed-top');
        $('#brand').removeClass('d-none');
        $('#header-items').addClass('ms-auto');
        $('#header-items').removeClass('mx-auto');
        $('#mainHeader').removeClass('navbar-expand');
        $('#mainHeader').addClass('navbar-expand-lg');
    }


});

    
    var rellax = new Rellax('.rellax', {
        wrapper: '.parallax-os-container'
    });
    
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 20.7512937, lng: -105.3772773 },
            zoom: 17,
            mapId: 'f015cdc7a7ee8d12',
        });

        
        var marker = new google.maps.Marker({
            position: { lat: 20.7512937, lng: -105.3772773 },
            map: map,
            draggable: false,
        });
    }
    /**Contact form submission */

    $('#osContactForm').on('submit', function (e) {
        e.preventDefault();

        $('.has-error').removeClass('has-error');
        $('.js-show-feedback').removeClass('js-show-feedback');

        var form = $(this);

        var name = form.find('#name').val(),
            email = form.find('#email').val(),
            message = form.find('#message').val(),
            phone = form.find('#phone').val(),
            ajaxurl = form.data('url');

        if (name === '') {
            $('#name').parent('.col').addClass('has-error');
            return;
        }

        if (email === '') {
            $('#email').parent('.col').addClass('has-error');
            return;
        }

        if (message === '') {
            $('#message').parent('.col').addClass('has-error');
            return;
        }

        form.find('input, button, textarea').attr('disabled', 'disabled');

        $('.js-form-submission').addClass('js-show-feedback');

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                name: name,
                email: email,
                phone: phone,
                message: message,
                action: 'v4you_save_contact'
            },

            error: function (response) {
                $('.js-form-submission').removeClass('js-show-feedback');
                $('.js-form-error').removeClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');
            },
            success: function (response) {
                if (response == 0) {
                    setTimeout(function () {
                        $('.js-form-submission').removeClass('js-show-feedback');
                        $('.js-form-error').removeClass('js-show-feedback');
                        form.find('input, button, textarea').removeAttr('disabled');
                    }, 1500);


                } else {
                    setTimeout(function () {
                        $('.js-form-submission').removeClass('js-show-feedback');
                        $('.js-form-success').removeClass('js-show-feedback');
                        form.find('input, button, textarea').removeAttr('disabled').val('');
                    }, 1500);

                }
            }
        });

        console.log('Form submited');
    });

    $("#osContactFormLink").on('click', 'a', function (event) {

        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 140
        }, 500);


    });

    //animaciones
    jQuery(function($) {

        // Function which adds the 'animated' class to any '.animatable' in view
        var doAnimations = function() {
            
            // Calc current offset and get all animatables
            var offset = $(window).scrollTop() + $(window).height();
            var $animatables = $('.animatable');
            
            // Unbind scroll handler if we have no animatables
            if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
            }
            
            // Check all animatables and animate them if necessary
                $animatables.each(function(i) {
                var $animatable = $(this);
                    if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
                    }
            });
        
            };
        
        // Hook doAnimations on scroll, and trigger a scroll
            $(window).on('scroll', doAnimations);
        $(window).trigger('scroll');
        
        }); 

