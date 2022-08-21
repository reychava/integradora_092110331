<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion_calzado</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
            //script para permitir solo escribir numero
            //Para decimal agregar step="any" en el input

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
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container xl-5 bg-light mt-3 rounded shadow">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center text-muted mt-2">Modificar datos de cliente</h3>
                    <form method="POST" action="actualizar_clien.php">
                        <!--Recibrir las variables para modificar-->
                        <?php

                            $codigo=$_GET["codigo"];
                            $nombre=$_GET["nombre"];
                            $talla=$_GET["edad"];
                            $sexo=$_GET["sexo"];
                            $mensualidad=$_GET["mensualidad"];
                            $precio=$_GET["precio"];
                            


                        ?>

                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de cliente</label>
                            <div class="col-sm-10">
                                <input type="number" name="codigo" required class="form-control" readonly value="<?php echo $codigo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" required class="form-control" value="<?php echo $nombre ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Edad</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" name="edad" id="edad" required class="form-control" value="<?php echo $edad ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Sexo</label>
                            <div class="col-sm-10">
                                <input type="text" name="sexo" required class="form-control" value="<?php echo $sexo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Mensualidad</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" name="mensualidad" required class="form-control" value="<?php echo $mensualidad ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="number" onkeypress="return solonumeros(event);" name="precio" required class="form-control" value="<?php echo $precio ?>">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success mb-3">Actualizar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-lg-block col-md-4 col-lg-5 col-lg-6 mt-5"> 
                </div>
            </div>
        </section>
        
    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>

    </body>
    
</html>