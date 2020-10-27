<?php 
include("conexion.php");
$materia = $_GET['nombre'];
mysqli_query($conexion,"INSERT INTO ‘cursos’(‘nombrecur’) VALUES ('$materia')");

?>