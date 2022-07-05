<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $email = $_POST['email'];
 $caso = $_POST['caso'];
 
$insertar = "INSERT INTO usuarios VALUES ('$nombre','$apellido','$email','$caso') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('su problema se a recivido le contestaremos lo antes posible');
    location.href = '/appweb_D2_P/contacto.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '/appweb_D2_P/contacto.php';
    </script>";
}

?>