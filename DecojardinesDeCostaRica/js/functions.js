$(document).ready(function () {
    $("#boton-servicio1").click(function () {
        $("#boton-servicio1").removeClass("collapsed");
        $("#texto-servicio1").show();
        $("#line1").show();
        $("#boton-servicio2").addClass("collapsed");
        $("#texto-servicio2").hide();
        $("#line2").hide();
        $("#boton-servicio3").addClass("collapsed");
        $("#texto-servicio3").hide();
        $("#line3").hide();
    });
    $("#boton-servicio2").click(function () {
        $("#boton-servicio1").addClass("collapsed");
        $("#texto-servicio1").hide();
        $("#line1").hide();
        $("#boton-servicio2").removeClass("collapsed");
        $("#texto-servicio2").show();
        $("#line2").show();
        $("#boton-servicio3").addClass("collapsed");
        $("#texto-servicio3").hide();
        $("#line3").hide();
    });
    $("#boton-servicio3").click(function () {
        $("#boton-servicio1").addClass("collapsed");
        $("#texto-servicio1").hide();
        $("#line1").hide();
        $("#boton-servicio2").addClass("collapsed");
        $("#texto-servicio2").hide();
        $("#line2").hide();
        $("#boton-servicio3").removeClass("collapsed");
        $("#texto-servicio3").show();
        $("#line3").show();
    });
});

$(document).ready(function () {
    $('#boton_inicio').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 1000);
    });
    $("#boton_somos").click(function () {
        $('body, html').animate({
            scrollTop: $("#div1").offset().top
        }, 600);
    });
    $("#boton_hacemos").click(function () {
        $('body, html').animate({
            scrollTop: $("#div2").offset().top
        }, 600);
    });
    $("#boton_servicios").click(function () {
        $('body, html').animate({
            scrollTop: $("#servicios").offset().top
        }, 600);
    });
    $("#boton_galeria").click(function () {
        $('body, html').animate({
            scrollTop: $("#galeria-proyectos").offset().top
        }, 600);
    });
    $("#boton_contacto").click(function () {
        $('body, html').animate({
            scrollTop: $("#footer").offset().top
        }, 600);
    });
});


$(window).on("scroll", function () {
    var ancho = $(window).width();
    if(ancho > 768){
        $('#navbar-inicio').css({'backgroundColor':'transparent',}, 5000);
    }
    if ($(window).scrollTop() > 0) {
         $('#navbar-inicio').css({'backgroundColor':'#000',}, 5000);
        $('#navbar-inicio').addClass('navbar-dark');
        $('#navbar-inicio').removeClass('navber-light');
        $('#logo_nav').css({'filter':'invert(0)',}, 5000);
    }else if($(window).scrollTop() <= 0 && ancho > 768){
        $('#navbar-inicio').css({'backgroundColor':'transparent',}, 5000);
        $('#navbar-inicio').removeClass('navbar-dark');
        $('#navbar-inicio').addClass('navber-light');
        $('#logo_nav').css({'filter':'invert(1)',}, 5000);
    } 
    
    
    else if(ancho > 768) {
        $('#navbar-inicio').css({'backgroundColor':'transparent',}, 5000);
    }
    
    if(ancho < 768){
        if ($(window).scrollTop()) {
         $("#a_img_2").slideUp();
    }
        else{
            $("#a_img_2").slideDown();
        }
    }
    
});


$(document).ready(function(){
    $('.toggle').click(function(){
        $('.toggle').toggleClass('active');
    });
});