<?php
 require 'conexion.php';
  
 $id  = $_POST['id'];
 $modelo  = $_POST['modelo'];
 $texto = $_POST['texto'];

$insertar = "INSERT INTO catalogo VALUES ('$id','$modelo','$texto') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '/appweb_D2_P/admin/seccion/productos.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '/appweb_D2_P/admin/seccion/productos.php';
    </script>";
}

?>