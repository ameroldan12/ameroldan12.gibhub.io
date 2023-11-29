<?php
$host="localhost";
$usu="root";
$pass="";
$db="pruebas";
$conexion=mysqli_connect($host,$usu,$pass,$db);
if(!$conexion){
echo"La conexion fallo";
}else{
echo"La conexion fue un exito";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
    <title>Conexion</title>
</head>
<body>
<div id="outer">
    <p> Has sido registrado correctamente </p>
  
  <div >
    <a name="boton" id="" class="button_slide slide_right" href="index.php" role="button">REGRESA AL MENÚ </a>
   </div>
  <br /> <br /><br />
  
</div>
</body>
</html>