<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tabla_solicitudes ORDER BY id_solicitud DESC");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una empresa con más de 15 años de experiencia en la jardinería.">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/datatable.css" />

    <script type="text/javascript" src="js/datatable.js"></script>
    <script>
        $(document).ready(function() {
    $('#solicitudes').DataTable();
            $('#testimonios').DataTable();
    } );
    </script>


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_admin.css">

    <!-- Custom styles for this template -->
</head>


<body class="" id="body_admin">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="nav_admin">
        <a class="navbar-brand col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6" href="#"><img class="img-fluid" src="img/logo_admin.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Solicitudes</a>
                </li>
            </ul>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Salir</button>
        </div>
    </nav>
    <div>

    </div>
    <main role="main" class="container">
        <div>
            <h1 class=" pt-5">Solicitudes</h1>
            <p class="pb-5">Todas las Solicitudes</p>

            <table id="solicitudes" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Testimonio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        
            while($user_data=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user_data['nombre']."</td>";
                echo "<td>".$user_data['correo']."</td>";
                echo "<td>".$user_data['telefono']."</td>";
                echo "<td>".$user_data['texto']."</td>";
                
                //operaciones
                
                echo "<td><a class='btn btn-danger' href='delete.php?id=$user_data[id_solicitud]'>Eliminar</a></td>
                
                </tr>";
                    
            }
            
        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Testimonio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div>
            <h1 class="pt-5">Testimonios</h1>
            <p class="pb-5">Todos los testimonios</p>

            <table id="testimonios" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Testimonio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jeremy Monge Solís</td>
                        <td>mongesolis@hotmail.com</td>
                        <td>Aliquam rutrum leo elit, a convallis ex sodales in. Praesent venenatis, elit non lobortis congue, dui diam posuere nulla, sit amet consequat risus nunc et nunc. Phasellus tempus hendrerit elit. Pellentesque egestas sapien at luctus vulputate. Praesent felis erat, volutpat sed euismod eget, volutpat in sapien. Cras euismod magna non libero fermentum, at eleifend nibh fermentum. Sed elementum nibh ac nunc scelerisque, in faucibus mi pretium.</td>
                        <td><button type="button" class="btn btn-success">Mostrar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Testimonio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>