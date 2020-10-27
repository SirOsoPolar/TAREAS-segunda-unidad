
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
echo "Nombre:".$reg['nombre']."<br>";
echo "Curso:";
   switch ($reg['codigocurso']) {
   case 1:echo "PHP";
   break;
   case 2:echo "ASP";
   break;
   case 3:echo "JSP";
   break;
   }
}
else {
    echo $email." no fue encontrado en la base de datos";
}

?>
</body>
</html>
