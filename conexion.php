<?php
$servidor = "localhost"; // dentro de las comillas ponemos la dirección del servidor
$bd_usuario = "root"; // dentro de las comillas ponemos el usauario del servidor, por defecto es root
$bd_password = ""; //dentro de las comillas ponemos la contraseña del usuario, 
                  //normalmente no tiene por lo que se deja vacío
$base="gym"; //aquí le indicamos a qué BD queremos hacer coinexión.

//crear una variable para la conexion '$conn'
$conn = mysqli_connect($servidor, $bd_usuario, $bd_password, $base);

//con esta condicional comprobamos si la conexión es exitosa o no
if (!$conn) {
  die("<br>Connection failed: " . mysqli_connect_error());
}
//echo "<br>Conexion realizada correctamente";

?>