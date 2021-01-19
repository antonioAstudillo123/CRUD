<?php
//error_reporting(0);

class ModeloCliente{
   private $conexion;
   private $consulta;

   public function __construct(){
      $this->conexion = new Mysqli("localhost" , "root" , "" ,"pmodular");
      $this->conexion->query('SET CHARACTER SET UTF8');
   }

   public function __destruct(){
      mysqli_close($this->conexion);
   }

   public function mostrarClientes($id = 0){

      if($id == 0){
         $consulta = "SELECT * FROM clientes ORDER BY id asc";
         $resultado = $this->conexion->query($consulta);
      }else{
         $consulta = "SELECT * FROM clientes WHERE id = '$id'";
         $resultado = $this->conexion->query($consulta);
      }

     return $resultado;
   }


   public function insertarCliente($nombre , $apellidos , $direccion){
      $consulta = "INSERT INTO clientes VALUES(0,'$nombre','$apellidos','$direccion')";


      $resultado = $this->conexion->query($consulta);

      if($this->conexion->affected_rows>0){
         return true;
      }else{
         return false;
      }
   }//cierra metodo insertarCliente

   public function eliminarCliente($id){
      $consulta = "DELETE FROM clientes WHERE id = '$id'";

      $resultado = $this->conexion->query($consulta);

      if($this->conexion->affected_rows>0){
         return true;
      }else{
         return false;
      }
   }


   public function actualizarCliente($id , $nombre , $apellido , $direccion){
      $consulta = "UPDATE clientes SET nombre = '$nombre', apellido='$apellido' , direccion= '$direccion' WHERE id = '$id'";

      $resultado = $this->conexion->query($consulta);

      if($resultado){
         return true;
      }else{
         return false;
      }

   }
}//cierra clase modeloCliente

 ?>
