$(document).ready(function () {
    $('.button-left').click(function () {
        $('.sidebar').toggleClass('fliph');
        $('.nav-label').slideToggle("fast");
    });
    $('#b-solicitudes').click(function () {
        $('#div-estadis').addClass('d-none');
        $('#div-testi').addClass('d-none');

        $('#div-solicitudes').removeClass('d-none');
        $('#div-solicitudes').addClass('animated');

    });

    $('#b-graficos').click(function () {
        $('#div-testi').addClass('d-none');
        $('#div-solicitudes').addClass('d-none');

        $('#div-estadis').removeClass('d-none');
        $('#div-estadis').addClass('animated');


    });
    
    $('#b-testimonios').click(function () {
        $('#div-estadis').addClass('d-none');
        $('#div-solicitudes').addClass('d-none');

        $('#div-testi').removeClass('d-none');
        $('#div-testi').addClass('animated');


    });

});