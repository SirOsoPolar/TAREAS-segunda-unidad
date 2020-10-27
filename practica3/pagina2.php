<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "unidad2";

$nombre = $_GET['nombre'];
$mail = $_GET['mail'];
$codigocurso = $_GET['codigocurso'];
echo $nombre.$mail.$codigocurso;

$conexion =  mysqli_connect($server,$user,$pass,$db) or die("Problemas en la conexion");
mysqli_query($conexion,"INSERT INTO alumnos(nombre,mail,codigocurso) values('$nombre','$mail','$codigocurso')");
echo "El alumno fue dado de alta.";
?>
</body>
</html>
