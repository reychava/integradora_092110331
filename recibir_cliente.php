<?php

echo "<h2>Recibiendo informacion del formulario de registro</h2>";//comentario 
$codigo=$_POST['codigo']; 
echo "El codigo del cliente es: ".$codigo."<br>"; // se recibe un dato de con el modo post
$nombre=$_POST['nombre'];
echo "El nombre del cliente es: ".$nombre."<br>";// se recibe un dato de con el modo post
$edad=$_POST['edad'];
echo  "La edad del cliente es :".$edad."<br>";// se recibe un dato de con el modo post
$sexo=$_POST['sexo'];
echo  "El sexo del cliente es :".$sexo."<br>";// se recibe un dato de con el modo post
$mensualidad=$_POST['mensualidad'];
echo "La mensualidad es: ".$mensualidad."<br>";// se recibe un dato de con el modo post
$precio=$_POST['precio'];
echo "El precio es: ".$precio."<br>";// se recibe un dato de con el modo post
$fecha_registro=$_POST['fecha'];
echo "Se registro el: ".$fecha_registro."<br>";// se recibe un dato de con el modo post

include("conexion.php"); //llama el archivo de conexiion de la base de datos
//consulta para registrar a un cliente o dar de alta
$sql="INSERT INTO cliente 
VALUES (id_registro, $codigo,'$nombre',$edad,'$sexo', $mensualidad, $precio,'$fecha_registro')";

//evaluar si se registro correctamente del cliente 
if(mysqli_query($conn,$sql))
{
    //echo "cliente registrado correctamente";
    //regresar a la pagina anterior
    header("location: registro.php");
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);// manda error desde la base de datos
}


?>