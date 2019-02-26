<?php

include_once("config.php");
$result1 = mysqli_query($mysqli, "SELECT * FROM tabla_solicitudes ORDER BY id_solicitud DESC");

$result2 = mysqli_query($mysqli, "SELECT * FROM tabla_testimonios ORDER BY id_testimonio DESC");

?>
<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='login.php';</script>";	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una empresa con más de 15 años de experiencia en la jardinería.">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="../js/wow.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/functions-admin.js"></script>
    <script type="text/javascript" src="../js/datatable.js"></script>
    <script>
        $(document).ready(function() {
    $('#solicitudes').DataTable();
            $('#testimonios').DataTable();
    } );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


    <script>
        new WOW().init();
    </script>
    <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <title>Decojardines de Costa Rica</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style-admin.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>


<body id="body" class="bg-dark">

    <div class="sidebar left fliph fixed-top pt-5 mt-5 slideInLeft animated">
        <ul class="list-sidebar bg-defoult row">
            <li id="b-graficos" class="col-12 p-0"> <a href="#"><i class="fa fa-chart-line col-3 p-2"></i> <span class="nav-label col-9 mt-2">Estadísticas</span></a> </li>
            <li id="b-solicitudes" class="col-12 p-0"> <a href="#"><i class="fas fa-clipboard-list col-3 p-2"></i> <span class="nav-label col-9 mt-2">Solicitudes</span></a> </li>
            <li id="b-testimonios" class="col-12 p-0"> <a href="#"><i class="fas fa-user-check col-3 p-2"></i> <span class="nav-label col-9 mt-2">Testimonios</span> </a></li>
        </ul>
    </div>
    <nav class="navbar header navbar-toggleable-md navbar-light fixed-top pl-0 slideInDown animated">

        <button class="navbar-toggler button-left border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" class="btn btn-dark stretched-link">Cerrar Sesión<i class=" ml-2 fas fa-sign-out-alt"></i></a></li>
      </ul>
    </nav>
    <main class="container pt-5 col-12 mr-1 justify-content-end">
        <div class="pl-5 slideInLeft animated" id="div-estadis">
            <h1 class=" pt-5 ml-3 text-white">Estadísticas</h1>
            <p class="pb-5 ml-3 text-white lean">Todas las Estadísticas</p>
            <div class="row">
                <canvas class="col-xl-6 col-sm-12 p-3 text-light" id="myChart1"></canvas>
                <canvas class="col-xl-6 col-sm-12 p-3" id="myChart2"></canvas>
            </div>
        </div>
        <div class="pl-5 slideInLeft d-none" id="div-solicitudes">
            <h1 class="pt-5 ml-3 slideInLeft animated text-light">Solicitudes</h1>
            <p class="pb-5 ml-3 text-light">Todas las Solicitudes</p>
            <div class="col-12" style="overflow-x: scroll">
                <table id="solicitudes" class="table table-striped text-light table-dark table-bordered" style="width:100%;">
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
        
            while($user_data=mysqli_fetch_array($result1)){
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
        </div>
        <div class="pl-5 slideInLeft d-none" id="div-testi">
            <h1 class="pt-5 ml-3 slideInLeft animated text-light">Solicitudes</h1>
            <p class="pb-5 ml-3 text-light">Todas las Solicitudes</p>
            <div class="col-12" style="overflow-x: scroll">
                <table id="testimonios" class="table table-striped table-dark table-bordered col-12" style="">
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
        
            while($user_data=mysqli_fetch_array($result2)){
                echo "<tr>";
                echo "<td>".$user_data['autor']."</td>";
                echo "<td>".$user_data['correo']."</td>";
                echo "<td>".$user_data['testimonio']."</td>";
                echo "<td>".$user_data['vista']."</td>";
                
                //operaciones
                
                echo "<td><a class='btn btn-danger' href='delete.php?id=$user_data[id_testimonio]'>Eliminar</a></td>
                
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
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
    </script>
    <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
<script>
    var ctx = document.getElementById("myChart1");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"],
            datasets: [{
                label: 'Visitas Mensuales',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: "white" // Cambiar color de labels
                    }
                }],
            }
        }
    });

    var ctx = document.getElementById("myChart2");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: 'Solicitudes Mensuales',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(0, 255, 206, 0.2)',
                ],
                borderColor: [
                    'rgba(0,255,206,1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</html>