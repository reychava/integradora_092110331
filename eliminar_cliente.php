<?php

//llamada de conexion de BD
      include("conexion.php");

//recibir codigo de cliente
$codigo = $_GET['codigo'];

//sql de eliminacion de cliente
$consulta = "DELETE  FROM cliente WHERE codigo=$codigo";

if (mysqli_query($conn, $consulta)) {
  //echo "<br>cliente eliminado correctamente";
  //regresar a la pagina anterior
  header("location: principal.php");
} else {
  echo "<br>Error al eliminar el calzado: " . mysqli_error($conn);
}

mysqli_close($conn);
?>