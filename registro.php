<!?php
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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

<link rel="stylesheet" href="estilo1.css">
  <title>"La despedida"registro</title>
</head>
<body>
    <form action="insertar.php" method="post">
	
  <section class="form-register">
    <h4>"La despedida"registro</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre"  required/>
    <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido" required/>
    <input class="controls" 
type="email" name="correo" id="correo" placeholder="Ingrese su Correo"  required/>
    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña"  required/>
    <p>Estoy de 

acuerdo con <a href="#">Terminos y Condiciones</a></p><br>
    <input class="botons" type="submit" value="Registrar">
    <input class="botons" type="reset" value="Borrar">
    
    <p><a href="#">¿Ya 

tengo Cuenta?</a></p>
  </section>
</form>
</body>
</html>
