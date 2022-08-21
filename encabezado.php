<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
.bg{
    background:  #283747 ;
    background: linear-gradient(to right,#2E4053 ,#5D6D7E);
}
</style>

    <body>
    <header>

        <div >
            <nav class="navbar navbar-expand-lg fixed-top bg mb fst-italic fw-bolder" >
                <div class="container-fluid">  <!-- Contenedor principal-->
                    <a class="navbar-brand">
                        <img src="img/gym2.png" alt="" width="50" height="40" class="d-inline-block align-text-top">GYMPRO
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para ver un efecto de menú -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item" ><a class="nav-link" href="registro.php">REGISTRO DE CLIENTE</a></li>

                            <li class="nav-item"><a class="nav-link" href="principal.php">LISTA DE CLIENTE</a></li>        
                        </u1>
                    </div> <!-- Este div cierra el menú -->
                </div> <!-- Este div cierra el contenedor princpal -->
            </nav>
        </div>
            
            <!-- Slide de imagenes -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- En este ontenedor estan las imagenes principales -->
                        <div class="carousel-inner"> <!-- Contenedor interno-->
                            <div class="carousel-item active bound"> <!-- imagen 1 -->
                                <img src="img/imagen6.png"  class="d-block w-100">
                            </div> 
                            <div class="carousel-item"> <!-- imagen 2 -->
                                <img src="img/imagen3.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item"> <!-- imagen 3 -->
                                <img src="img/imagen4.png" class="d-block w-100">
                            </div>
                            
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                

        </header>
    </body>
</html>
