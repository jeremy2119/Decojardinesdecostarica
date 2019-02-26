<?php

include_once("config.php");

$id = $_GET["id"];

$result = mysqli_query($mysqli,"DELETE FROM tabla_solicitudes WHERE id_solicitud=$id");

header("Location:admin.php");
?>