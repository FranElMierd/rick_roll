<?php
 require 'conexion.php';

$consultar = "SELECT * FROM catalogo";
$query = mysqli_query($conectar, $consultar);
$array = mysqli_fetch_array($query);


 ?>