<?php

include_once 'basedatos/conexion.php';

$objeto = new ModeloCliente();

if(isset($_POST['insertar'])){

   $nombre= $_POST['nombre'];
   $apellidos= $_POST['apellidos'];
   $direccion= $_POST['direccion'];

   $nombre = ucwords($nombre);
   $apellidos = ucwords($apellidos);
   $direccion = ucwords($direccion);

   if($objeto->insertarCliente($nombre,$apellidos,$direccion)){
        header("Location:index.php");
   }else{
      die("Hubo un problema 3.3");
   }

}
else if(isset($_POST['actualizar']) && isset($_POST['valor']) ){
   $valor = $_POST['valor'];

   header("Location:procesarView.php?valor=$valor");


}
else if(isset($_POST['borrar']) && isset($_POST['valor'])){

   $valor = $_POST['valor'];

   if($objeto->eliminarCliente($valor)){
      header("Location:index.php");
   }else{
      die("Hubo un problema al eliminar el registro 3.5");
   }

}
else {
   header("Location:index.php");
}


 ?>
