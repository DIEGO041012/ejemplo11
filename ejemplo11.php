<?php

$server = "localhost";
$user = "root";
$pss = "";
$db = "ejemplo11";

$conexion = new mysqli($server, $user, $pss, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->connect_error);

} else{
    echo"conectado";
}


?>