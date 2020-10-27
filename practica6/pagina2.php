
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
$conexion =  mysqli_connect($server,$user,$pass,$db);
$email = $_GET['mail'];
$registros = mysqli_query($conexion,"SELECT * from alumnos where mail='$email'");
if($reg = mysqli_fetch_array($registros)){
echo $reg['nombre']." ha sido eliminado de la base de datos "."<br>";
mysqli_query($conexion,"DELETE FROM ALUMNOS WHERE mail='$email'");
}
else {
    echo $email." no fue encontrado en la base de datos";
}

?>
</body>
</html>
