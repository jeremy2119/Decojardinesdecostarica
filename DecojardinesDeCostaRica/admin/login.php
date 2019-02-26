<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una empresa con más de 15 años de experiencia en la jardinería.">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/functions.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/wow.js"></script>
    <script src="js/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <title>Decojardines de Costa Rica</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom styles for this template -->
</head>


<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top justify-content-center">
        <a class="navbar-brand col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6 m-2 p-0" href="#" id="a_img_1"><img src="../img/logo4-h.png" class="img-fluid" id="logo_n"></a>
        <a class="navbar-brand m-1 px-sm-5 col-10" href="#" id="a_img_2"><img src="../img/logo4-h.png" class="img-fluid px-sm-5" style="filter: invert(0)" id="logo_na"></a>
    </nav>

    <main role="main" class="container mb-5 pt-3 mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-6 col-md-11 col-11 bg-dark p-5 mb-3 text-align-center animated fadeInDown" id="form_solicitud">
                <div class="row justify-content-center">
                    <h1 class="text-light">ADMINISTRACIÓN</h1>
                </div>
                <div class="separator col-xl-12">
                    <span><i class="fa fa-circle"></i></span>
                </div>
                <div class="justify-content-end col-12" id="formulario-soli">
                    <div id="form_login">
                        <div class="form-group">
                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0" id="nombre_usuario" placeholder="Nombre de Usuario" required name="nombre_usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0  bg-dark border-green rounded-0" placeholder="Contraseña" required name="contrasena" id="contrasena">
                        </div>
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
                            Usuario Inválido. Verifique que los datos ingresados sean correctos.
                        </div>
                        <div class="row justify-content-end pr-3">
                            <button class="lean bg-dark" id="ejecutar">INICIAR SESIÓN</button>
                        </div>
                    </div>
                    <div class="row" id="loader_row" style="display: none">
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
                    <script type="text/javascript">
                        $('#ejecutar').click(function() {

                            enviar($('#nombre_usuario').val(), $('#contrasena').val());

                        });

                        function enviar(val1, val2) {
                            var parametros = {
                                "val1": val1,
                                "val2": val2
                            }

                            $.ajax({

                                data: parametros,
                                url: "loginconfig.php",
                                type: "post",
                                cache: false,
                                beforeSend: function() {
                                    $('#loader_row').slideDown();
                                    $('#form_login').slideUp();
                                    $('.alert').slideUp();
                                },
                                success: function(data) {
                                    if (data == "correcto") {

                                        window.location.href = "index.php";
                                    } else {
                                        $('#loader_row').hide();
                                        $('#form_login').slideDown();
                                        
                                        $('.alert').slideDown();
                                    }
                                }

                            });
                        }
                    </script>
                </div>

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