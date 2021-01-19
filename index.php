<?php

 include_once 'basedatos/conexion.php';

 $objeto = new ModeloCliente();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>CRUD</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/estilos.css">
   </head>
   <body>
      <h1>CRUD</h1>
      <div class="contenedor">
         <form class="formulario" action="procesar.php" method="post">
            <table class="table">
               <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>NACIONALIDAD</th>
               </tr>
               <?php $resultado = $objeto->mostrarClientes()?>
               <?php  while($fila = $resultado->fetch_assoc()):?>
                  <tr>
                     <td><?php echo $fila['id']; ?></td>
                     <td><?php echo $fila['nombre']; ?></td>
                     <td><?php echo $fila['apellido']; ?></td>
                     <td><?php echo $fila['direccion']; ?></td>
                     <td><input type="radio" name="valor" value="<?php echo $fila['id'];?>">
                  </tr>
               <?php endwhile; ?>
               <tr>
                  <th></th>
                  <th><input type="text" name="nombre"></th>
                  <th><input type="text" name="apellidos"></th>
                  <th><input type="text" name="direccion"></th>
               </tr>
           </table>
           <div class="contenedor-input">
               <input type="submit" name="insertar" value="Insertar">
               <input type="submit" name="actualizar" value="Actualizar">
               <input type="submit" name="borrar" value="Borrar">
            </div>
         </form>
      </div>
   </body>
</html>
