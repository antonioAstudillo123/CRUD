<?php
require_once 'basedatos/conexion.php';

$id = $_GET['id'];
$nombre =ucwords($_POST['nombre']);
$apellido =ucwords($_POST['apellidos']);
$direccion =ucwords($_POST['direccion']);

$objeto = new ModeloCliente();

if($objeto->actualizarCliente($id,$nombre,$apellido,$direccion)){
   header("Location:index.php");
}else{
   die("Hubo problemas en el servidor");
}


 ?>
