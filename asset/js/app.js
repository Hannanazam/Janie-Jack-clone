


$(document).ready(function() {
    $('.close_icon').hide();
    $('.icon_foot').hide();
    $('.nav_main_link').hide();
    $('.nav-icon').hide();
    $('.search_icon_main').hide();
    
    
$(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('.navigation nav').addClass('sticky')
    } else{
        $('.navigation nav').removeClass('sticky')
    }
});

    if($(window).width() <= 992){
        
        $('.ship_to').html('<img src="https://flowcdn.io/util/icons/flags-v2/svg/PAK.svg" alt="">')
        $('.store').html('<i class="fal fa-map-marker-alt mr-1"></i>')
        $('.track').html('<i class="fal fa-truck mr-1"></i>')
        $('.signin').html('<i class="fal fa-user mr-1"></i>')
        $('.wishlist').html('<i class="fal fa-heart mr-1"></i>')
    $('.search_icon_main').show();
    $('.search_bar').hide();
    $('.search_icon_main').click(function(){
        $('.search_bar').fadeToggle();
    });
    $('.navbar-toggler.navbar_to_open').click(function(){
        $('.wrapper_black').fadeIn('fast');
        $('.close_icon').fadeIn('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });

    $('.close_icon').click(function(){
        $('.wrapper_black').fadeOut('fast');
        $('.close_icon').fadeOut('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });

    $('.wrapper_black').click(function(){
        $('.wrapper_black').fadeOut('fast');
        $('.close_icon').fadeOut('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });
    $('.nav-icon').show();
    $('.link_area').hide();
    $(this).find('.content_area p').click(function () {
        $(this).next('.link_area').slideToggle();
        $(this).find('.plus_icon i').toggleClass("rotate_45");
        // var a = $(this).next().find(".link_area").fadeIn();
        // console.log(a)
    });
    // $('.dropdown_nav').bind('hover', function(){return false})
    $('.dropdown_nav').unbind(function () {
        $('.dropdown_nav').off('mouseenter mouseleave');
    });
    

        // $(".dropdown_nav").click(
        //   function () {
        //     $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeIn("fast");
        //     $(this).toggleClass('open');
        //   },
        //   function () {
        //     $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeOut("fast");
        //     $(this).toggleClass('open');
        //   }
        // );
    
    }else{
        console.log("error in 992px")
    }

    if($(window).width() <= 550){
        $('.store').hide();
        $('.track').hide();
        $('.wishlist').hide();
        $('.signin').hide();
        $('.nav_main_link').show();
        $('.icon_foot').show();
        $('.menu-footer.menu.pipe').hide();
        $('.footer-sub-title').click(function() {
            $(this).next('.menu-footer.menu.pipe').slideToggle();
            $(this).find('.icon_foot').toggleClass('rotate_45');
            });
        }else{
        console.log("error in 550px")
            
        }
   
});
   