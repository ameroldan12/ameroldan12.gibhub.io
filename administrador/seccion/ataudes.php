<?php include("../template/cabecera.php");?>
<?php 
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){

         case "Agregar";
         $sentenciaSQL= $conexion->prepare("INSERT INTO ataudes (nombre, imagen) VALUES (:nombre, :imagen);");
         $sentenciaSQL->bindParam(':nombre',$txtNombre);

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

         if($tmpImagen!=""){

            move_uploaded_file($tmpImagen,"../../images/".$nombreArchivo);
         }


         $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
         $sentenciaSQL->execute();
         
        header("Location:ataudes.php");
         break;

         case "Modificar";
           
         $sentenciaSQL= $conexion->prepare("UPDATE ataudes SET nombre=:nombre WHERE id=:id");
         $sentenciaSQL->bindParam(':nombre',$txtNombre);
         $sentenciaSQL->bindParam(':id',$txtID);
         $sentenciaSQL->execute();

         if($txtImagen!=""){

            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
            move_uploaded_file($tmpImagen,"../../images/".$nombreArchivo);

            $sentenciaSQL= $conexion->prepare("SELECT imagen FROM ataudes WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $ataud=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
            if( isset($ataud["imagen"]) &&($ataud["imagen"]!="imagen.jpg") ){
                if(file_exists("../../images/".$ataud["imagen"])){
                    unlink("../../images/".$ataud["imagen"]);
                }
            }
            
               $sentenciaSQL= $conexion->prepare("UPDATE ataudes SET imagen=:imagen WHERE id=:id");
               $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
               $sentenciaSQL->bindParam(':id',$txtID);
               $sentenciaSQL->execute();
         }

         header("Location:ataudes.php");
             //echo "Presionado botón modificar";
             break;

        case "Cancelar";
        header("Location:ataudes.php");
             //echo "Presionado botón cancelar";
             break;
             
        case "Seleccionar";

           $sentenciaSQL= $conexion->prepare("SELECT*FROM ataudes WHERE id=:id");
           $sentenciaSQL->bindParam(':id',$txtID);
           $sentenciaSQL->execute();
           $ataud=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

           $txtNombre=$ataud['nombre'];
           $txtImagen=$ataud['imagen'];
           

            //echo "Presionado botón Seleccionar";
             break;

        case "Borrar";
            
        $sentenciaSQL= $conexion->prepare("SELECT imagen FROM ataudes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $ataud=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        if( isset($ataud["imagen"]) &&($ataud["imagen"]!="imagen.jpg") ){
            if(file_exists("../../images/".$ataud["imagen"])){
                unlink("../../images/".$ataud["imagen"]);
            }
        }

            $sentenciaSQL= $conexion->prepare("DELETE FROM ataudes  WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            
        header("Location:ataudes.php");
             //echo "Presionado botón Borrar";
             break;

}
$sentenciaSQL= $conexion->prepare("SELECT*FROM ataudes");
$sentenciaSQL->execute();
$listaAtaudes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="col-md-5">
     <div class="card">
        <div class="card-header">
           Datos de ataudes 
        </div>

        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly class="form-control" value="<?php echo $txtID;?>" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre:</label>
<input type="text" required class="form-control" value="<?php  echo $txtNombre;?>" name="txtNombre" id="txtNombre" placeholder="Nombre del ataud ">
</div>

<div class = "form-group">
<label for="txtNombre">Imagen:</label>

<br/>


<?php if($txtImagen!=""){ ?>

    <img class="img-thumbnail rounded" src="../../images/<?php echo $txtImagen;?>"  width="50" alt="" srcset="">
    
<?php } ?>



<input type="file"  class="form-control" name="txtImagen" id="txtImagen" placeholder="ID">
</div>

<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value="Agregar"  class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" <?php echo ($accion!=="Seleccionar")?"disabled":""; ?> value="Modificar"  class="btn btn-warning">Modificar </button>
    <button type="submit" name="accion"<?php  echo ($accion!=="Seleccionar")?"disabled":""; ?>  value="Cancelar"  class="btn btn-info">Cancelar</button>
</div>
</form>



        </div>
       
     </div>



    

</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaAtaudes as $atuad  ) { ?>
            <tr>
                <td><?php echo $atuad['id'];  ?> </td>
                <td><?php echo $atuad['nombre'];  ?> </td>
                <td>

                <img class="img-thumbnail rounded" src="../../images/<?php echo $atuad['imagen'];  ?>" width="50" alt="" srcset="">

                </td>

                
                
                <td>

                    <form  method="post">
                        <input type="hidden" name="txtID" id="txtID" value=<?php echo $atuad['id'];  ?>""/>
                        
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />

                    </form>



                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>


</div>




<?php include("../template/pie.php");?>