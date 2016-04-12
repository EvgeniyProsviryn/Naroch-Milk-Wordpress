$(document).ready(function() {
    $('.menu').click(function(){
        $('.top-line,.middle-line,.bottom-line').toggleClass('active');
        $('.menu-list').toggleClass('out');
    });
	
     function HeightDetected(){
        var height = $(window).height();
        $('.image').css('height',height)
    }
    
    HeightDetected();
	
    $(window).resize(function(){
        HeightDetected();
    });

    $('.icona').addClass('swing animated');
    $('.log').addClass('swing animated');
    $('.textImg').addClass('zoomIn animated');
    $('.icon2').addClass('zoomIn animated');
    $('.menu').addClass('zoomIn animated');
});

$(window).load(function(){
    $('.loader').fadeOut();
    $('.text').delay(400).fadeOut('slow');
})

$(window).scroll(function(){
        if(window.pageYOffset>=200){

            $('.aboutText').addClass('zoomIn animated');
            $('.aboutTextFull').addClass('zoomIn animated');
            $('.Products').addClass('zoomInUp animated');


        }

        if(window.pageYOffset>=800){

            $('.fanc').addClass('flipInX animated');
        }

         if(window.pageYOffset>=1200){

            $('.ani').addClass('zoomInUp animated');
        }

        if(window.pageYOffset>=1600){

            $('.ani2').addClass('zoomInUp animated');
        }

        if(window.pageYOffset>=2000){

            $('.fanc').addClass('zoomInUp animated');
        }

    });