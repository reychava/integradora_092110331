<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lista</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

  <body>
     
      <?php //parte de encabezado
      include("encabezado.php") // mandar a llmar el archivo de encabezado
      ?>

    
        <div class="container shadow rounded mt-2"> <!-- contenedor de la tabla completa-->
          <nav class="navbar">
            <form class="container-fluid" method="GET" action="#"> 
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Buscar cliente</span>
                <input type="search" class="form-control" name="busqueda" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
              </div>
            </form>
          </nav>
        </div>

      <section>        
        <div class="container table-responsive bg-light shadow rounded mt-3 mb-3">
          <div class="col-lg-12">
            <h1 class="text-center text-muted mt-2"> Inventario de cliente</h1> <!--nombre de la tabla-->
            <table class="table table-hover text-center">
              <thead> <!-- columnas de la tabla con sus respectivos encaezados-->
                  <a class='btn btn-info mb-2' href='registro.php'> Agregar </a>
                  <tr>
                    <th>Código de cliente</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Mensualidad</th>
                    <th>Precio</th>
                  </tr>
              </thead>

                <?php

                  include("conexion.php"); //llamar el archivi de conexion de la base de datos
                  //este parte es para crear la búsqueda de un producto
                  if(isset($_GET["busqueda"])){
                  $busqueda=$_GET["busqueda"];
                  //consulta para crear una búsqueda
                  $consulta="SELECT * FROM cliente where nombre like '%$busqueda%' OR sexo like '%$busqueda%' 
                  OR edad like '%$busqueda%' OR precio like '%$busqueda%' OR mensualidad like '%$busqueda%' 
                  OR codigo like '%$busqueda%'OR fecha_registro like '%$busqueda%'";
                  }
                  else{
        //después de la búsqueda creamos esta consulta para seleccionar los resultados obtenidos (iguales oparecidos)
                      $consulta="SELECT * FROM cliente";
                  }
                  //resultado de la consulta que se hizo y validando el resultado
                  $resultado=mysqli_query($conn,$consulta);
                  if(mysqli_num_rows($resultado)>0)
                    {
                      while($fila=mysqli_fetch_assoc($resultado))
                        {
                        echo "<tr>";
                        echo "<td>".$fila['codigo']."</td>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>".$fila['edad']."</td>";
                        echo "<td>".$fila['sexo']."</td>";
                        echo "<td>".$fila['mensualidad']."</td>";
                        echo "<td>".$fila['precio']."</td>";
                        //boton de eliinar cliente 
                        echo "<td> <a class='btn btn-danger' href='eliminar_cliente.php?codigo=".$fila['codigo']."'> Eliminar </a> </td>";
                        //boton de modificar datos del cliente 
                        echo "<td> <a class='btn btn-warning' href='actualizar_cliente.php?codigo=".$fila['codigo']."&nombre=".$fila['nombre']."&edad=".$fila['edad']."&sexo=".$fila['sexo']."&mensualidad=".$fila['mensualidad']."&precio=".$fila['precio']."'> Modificar </a> </td>";
                        echo "</tr>";
                        }
                    } else {
                        echo "Sin resultados";
                    }
                ?>
            </table>
          </div>
          
        </div>
        
      </section>
    
      <?php //parte del pie de pagina
      include("pie_de_pagina.php") // llama el archivo del pie de pagina
      ?> 
  </body>
</html>