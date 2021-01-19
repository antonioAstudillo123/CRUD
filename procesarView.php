<?php
require_once 'basedatos/conexion.php';

$objeto = new ModeloCliente();
$resultado = $objeto->mostrarClientes($_GET['valor']);
$registro = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Formulario de Actualizacion</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/formulario.css">
   </head>
   <body>

   <h1>Formulario de actualización</h1>
   <div class="formulario">
      <form class="" action="guardarCambios.php?id=<?php echo $_GET['valor']; ?>" method="post">
       <label for="name">Nombre<input id="name" type="text" name="nombre"   value="<?php echo $registro['nombre']; ?>"></label>
       <label for="apellido">Apellido <input id="apellido" type="text" name="apellidos"  value="<?php echo $registro['apellido']; ?>"></label>
       <label for="direccion">Nacionalidad<input id="direccion" type="text" name="direccion"  value="<?php echo $registro['direccion']; ?>"></label>
        <input type="submit" name="btnGuardar"  value="Guardar Cambios">
      </form>
  </div>
   </body>
</html>
