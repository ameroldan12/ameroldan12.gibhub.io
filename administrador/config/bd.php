
<?php
$host="localhost";
$bd="funeraria";
$usuario="root";
$contrasena="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario, $contrasena);
    if($conexion){
        echo "";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>