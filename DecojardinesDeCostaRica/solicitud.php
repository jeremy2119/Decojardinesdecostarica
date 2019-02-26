<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tabla_solicitudes ORDER BY id_solicitud DESC");

?>


<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una empresa con más de 15 años de experiencia en la jardinería.">
    <meta name="theme-color" content="#000000" />

    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="js/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <title>Decojardines de Costa Rica</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_solicitud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom styles for this template -->

</head>

<nav class="navbar navbar-expand-md navbar-light fixed-top justify-content-center" id="navbar-inicio">
    <a class="navbar-brand col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6 m-2 p-0" href="#" id="a_img_1"><img src="img/logo4-h.png" class="img-fluid" style="filter: invert(1)" id="logo_nav"></a>
    <a class="navbar-brand m-1 px-sm-5 col-10" href="#" id="a_img_2"><img src="img/logo4-h.png" class="img-fluid px-sm-5" style="filter: invert(0)" id="logo_nav2"></a>
    <div class="navbar-toggler col-2" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" id="navbar-boton" style="height: 50px; border-color: transparent;">
        <span class="toggle"><span></span></span>
    </div>

    <div class="collapse navbar-collapse ml-3" id="navbarsExampleDefault">
        <ul class="row navbar-nav mr-auto justify-content-end">
            <li class="nav-item active">
                <a class="nav-link boton-menu" href="index.php">¿QUIENES SOMOS?<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link boton-menu" href="index.php">¿QUE HACEMOS?<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link boton-menu" href="index.php">SERVICIOS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link boton-menu" href="index.php">GALERÍA<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link boton-menu" href="index.php">CONTACTENOS<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<body class="animated fadeIn">




    <main role="main" class="container mt-2">

        <div class="row mt-5 justify-content-center">
            <div class="col-xl-6 col-lg-6 mb-5 col-md-11 col-11 pr-5" style="margin-top: 25vh;">
                <h1 class="animated fadeInUp">SOMOS LA OPCIÓN MÁS CONFIABLE PARA SU JARDÍN</h1>
                <p class="lean animated fadeInUp text-light" id="respaldo">Aliquam rutrum leo elit, a convallis ex sodales in. Praesent venenatis, elit non lobortis congue, dui diam posuere nulla, sit amet consequat risus nunc et nunc.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-11 col-11 bg-dark p-5 mb-5 text-align-center animated rotateInDownRight" id="form_solicitud">
                <div class="row justify-content-center">
                    <h1 class="text-light">SOLICITUD DE COTIZACIÓN</h1>
                </div>
                <div class="separator col-xl-12">
                    <span><i class="fa fa-circle"></i></span>
                </div>
                <div class="justify-content-end col-12" id="formulario-soli">
                    <div class="form-group">
                        <input type="text" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0" id="nombre" placeholder="Nombre Completo" required name="nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0" placeholder="Teléfono" required name="telefono" id="telefono">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0" placeholder="Correo Electrónico" id="correo" required name="correo">
                    </div>
                    <div class="form-group">
                        <textarea id="texto_solicitud" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0 textareasoli" placeholder="Ingrese su solicitud(Máximo 200 carácteres)" rows="5" maxlength="200" required name="texto_soli"></textarea>
                    </div>
                    <div class="row justify-content-end pr-3">
                        <button class="lean bg-dark" name="Submit" id="ejecutar">Enviar Solicitud</button>
                    </div>
                </div>

                <div class="row d-none" id="loader_row">
                    <div id="loader">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="lading"></div>
                    </div>
                </div>

                <div class="row d-none" id="enviado_row">
                    <div id="loader">
                        <img class="img-fluid" src="img/enviado.png" id="enviado_img">
                        <h4>DATOS ENVIADOS</h4>
                    </div>
                </div>
                <script type="text/javascript">
                    $('#ejecutar').click(function() {

                        enviar($('#nombre').val(), $('#telefono').val(), $('#correo').val(), $('#texto_solicitud').val());

                    });

                    function enviar(val1, val2, val3, val4) {
                        var parametros = {
                            "val1": val1,
                            "val2": val2,
                            "val3": val3,
                            "val4": val4
                        }

                        $.ajax({

                            data: parametros,
                            url: "agregar_soli.php",
                            type: "post",
                            beforeSend: function() {
                                $('#loader_row').removeClass("d-none");
                                $('#formulario-soli').addClass("d-none");
                            }
                        }).done(function(data) {
                            $('#loader_row').addClass("d-none");
                            $('#enviado_row').removeClass("d-none");
                            $('#enviado_row').addClass("animated");
                            $('#enviado_row').addClass("fadeInDown");
                            $('#enviado_img').addClass("animated");
                            $('#enviado_img').addClass("flip");


                        });
                    }
                </script>
            </div>
        </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>