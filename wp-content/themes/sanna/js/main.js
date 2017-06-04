(function($) {

    'use strict';

    console.log($("li a[href^='#']"))

    $("li a[href^='#']").on('click', function(e) {

        e.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function(){

        
            window.location.hash = hash;
        });
    });

    $('form').bootstrapValidator({
        fields: {
            name: {
                validators: {
                    stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Per favore scrivi il tuo nome'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Per favore scrivi la tua email'
                    },
                    emailAddress: {
                        message: 'Scrivi una email corretta'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Scrivi il tuo numero di telefono'
                    },
                    phone: {
                        country: 'US',
                        message: 'Il numero non è valido'
                    }
                }
            }
        }
    });

})(jQuery);



