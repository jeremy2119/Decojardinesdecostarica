<?php
                        
                        $nombre = $_POST['val1'];
                        $correo = $_POST['val2'];
                        $testimonio = $_POST['val3'];
                        // Incluir archivo de conexión
                        include_once("config.php");
                        // Insertar usuario a base
                        $result = mysqli_query($mysqli, "INSERT INTO
                        tabla_testimonios(autor,correo,testimonio,vista) VALUES('$nombre','$correo','$testimonio','oculto')");
                        ?>