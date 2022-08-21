<?php

//recibir las variables del formulario y actualizar

//echo "Aca voy a actualizar los datos";
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$sexo=$_POST["sexo"];
$mensualidad=$_POST["mensualidad"];
$precio=$_POST["precio"];

//llamar al archivo conexión para conectar a la BD
include("conexion.php");

//actulizar los datos de la base bde datos
$sql = "UPDATE cliente SET nombre='$nombre', edad=$edad, sexo='$sexo',mensualidad=$mensualidad, precio=$precio 
WHERE codigo=$codigo";

echo "consulta: ".$sql;
if (mysqli_query($conn,$sql)) {
  
  header("Location: principal.php");//se direcciona ala pagina principal
} else {
  echo "Error al modificar un campo: " . mysqli_error($conn);// manda error desde la base de datos 
}

mysqli_close($conn);
?>