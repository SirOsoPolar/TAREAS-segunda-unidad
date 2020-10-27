<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "unidad2";

$conexion =  mysqli_connect($server,$user,$pass,$db);

if(!$conexion){
    die("La conexion a fallado". $conexion ->connect_error);
}else{
    echo "conectado parse";
}

?>