<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro_Calzado</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
            // una funcion para inabilitar en los numeros en cietas partes 
            function solonumeros(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
            }
        </script>
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php") //mandar a llamar el archivo de encabezado
        ?>

<!-- Formulario de registro -->

        <section class="container bg-light shadow rounded mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="text-center text-muted mt-2">Registro de cliente</h3>
                    <form method="POST" action="recibir_cliente.php"> <!--en esta se emplea el metodo post para llamar datos-->
                        <div class="row mb-3">
                            <label class="col-sm-10">Código de cliente</label>
                            <div class="col-sm-10">
                                <input type="number" id='codigo' onkeypress="return solonumeros(event);" name="codigo" required class="form-control" placeholder="Introduce el codigo de cliente" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10 ">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" required class="form-control" placeholder="Escribe el nombre del cliente" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Edad</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" name="edad" required class="form-control" placeholder="Introduce la edad del cliente" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Sexo</label>
                            <div class="col-sm-10">
                                <input type="text" name="sexo" required class="form-control" placeholder="Introduce el sexo del cliente" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Mensualidad</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" pattern="[0-9]+" name="mensualidad" required class="form-control" placeholder="Introduce la mensualidad" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" pattern="[0-9]+" name="precio" required class="form-control" placeholder="Introduce el precio" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha de registro</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha" required class="form-control">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto"> <!-- boton de registrar -->
                            <button class="btn btn-info mb-3">Registrar</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-8 table-responsive shadow rounded">
                    <h3 class="text-center text-muted mt-2"> Lista de cliente registrado</h3> <!--listado de la tabala de cliente-->
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Mensualiad</th>
                                <th>Precio</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </thead>

                                <?php
                                    include("conexion.php"); // llamar el archivo de conexion para la base de datos
                                    $consulta="SELECT * FROM cliente"; // hacer una consulta de la tabla cliente
                                    $resultado=mysqli_query($conn,$consulta); //resultado de la validacion de la consulta con la conexion
                                    if(mysqli_num_rows($resultado)>0)
                                    {
                                        while($fila=mysqli_fetch_assoc($resultado))
                                        {
                                        echo "<tr>";
                                        echo "<td>".$fila['id_registro']."</td>";
                                        echo "<td>".$fila['codigo']."</td>";
                                        echo "<td>".$fila['nombre']."</td>";
                                        echo "<td>".$fila['edad']."</td>";
                                        echo "<td>".$fila['sexo']."</td>";
                                        echo "<td>".$fila['mensualidad']."</td>";
                                        echo "<td>".$fila['precio']."</td>";
                                        echo "<td>".$fila['fecha_registro']."</td>";
                                        echo "</tr>";
                                        }
                                    }else
                                    {
                                        echo "Sin resultados";
                                    }

                                ?>

                    </table>
                </div>
            </div>
        </section>
        
    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>

    </body>
    
</html>