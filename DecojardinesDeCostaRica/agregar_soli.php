    <?php
                        
                        $nombre = $_POST['val1'];
                        $telefono = $_POST['val2'];
                        $correo = $_POST['val3'];
                        $texto = $_POST['val4'];
                        // Incluir archivo de conexión
                        include_once("config.php");
                        // Insertar usuario a base
                        $result = mysqli_query($mysqli, "INSERT INTO
                        tabla_solicitudes(nombre,telefono,correo,texto) VALUES('$nombre','$telefono','$correo','$texto')");
                        ?>