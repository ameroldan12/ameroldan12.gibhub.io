<?php
include "conexion.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$insertar="INSERT INTO insertar VALUE ('','$nombre','$apellido','$correo','$contrasena' )";
$resultado_insertar=mysqli_query($conexion,$insertar);
if ($resultado_insertar) {
    echo"";

} else{
    echo"";
}
?>