<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TP Integrador</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-4"> 
                        <img src="img/codoacodo.png" class="img-fluid"> 
                    </div> 
                    <div class="col-4 textocolor"> 
                        <h4> Conf Bs As</h4>       
                    </div> 
                </div>
            <a class="navbar-brand" href="#"></a>
                <div class="collapse navbar-collapse fondo" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#inicio">La conferencia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#losoradores">Los Oradores</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ellugar">El lugar y la fecha</a></li>
                        <li class="nav-item"><a class="nav-link" href="#convertirse">Conviertete en orador</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscriptos.php">Ver Inscriptos</a></li>
                        <li class="nav-item"><a class="nav-link concolor" href="ticketera.html">Comprar tickets</a></li>
                    </ul>                
                </div>
            </div>
        </nav>  <!-- Fin barra de navegacion-->      
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row" id="inicio">
                <div class="col-12 col-sm-12 ">
                    <!--<img src="img/ba1.jpg" class="img-fluid oscura">-->
                    <img src="img/ba1.jpg" class="img-fluid">
                    <div class="titulo-dentro">
                        <h3> Conf Bs As</h3>
                    </div>
                    <div class="texto-derecha">
                        <br>Bs As llega por primera vez a Argentina. Un evento para compartir con<br>
                        nuestra comuniad el conocimiento y experiencia de los expertos que <br>
                        estan creando el futuro de intenet. Ven a conoer a miembros del <br>
                        evento a otros estudiantes de codo a codo y los oradores de primer <br>
                        nivel que tenemos para ti. Te esperamos!.<br>
                    </div>
                    <div>
                        <button type="button" class="btn btn-light btnorador">Quiero ser Orador</button>                  
                        <button type="button" class="btn btn-success btnticket"><a href="ticketera.html" style="text-decoration: none; color: white;">Comprar Ticket</a></button>                  
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards -->
    </main>
    <section>
        <div class="container">
            <div class="row">
                <br>
            </div>
            <div class="row" id="losoradores">
                    <h6 style="text-align: center;">CONOCE A LOS</h4>
            </div>
            <div class="row">
                    <h2 style="text-align: center;">ORADORES</h2>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card" style="border: 1;">
                        <img src="img/steve.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge" style="background-color: yellow; color: rgb(51, 11, 88);">JavaScript</span>
                            <span class="badge" style="background-color: cyan;">React</span>
                            <h5 class="card-title">Steve Jobs</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi porro, quod pariatur et consequatur fugiat repellendus provident. Accusamus blanditiis saepe sit beatae perspiciatis nam. Libero ullam tempora facilis placeat delectus.</p>
                        </div>
                        <!--<div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>-->
                    </div>

                    <div class="card" style="margin-left: 50px; margin-right: 50px; border: 1;">
                        <img src="img/bill.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge" style="background-color: yellow; color: rgb(51, 11, 88);">JavaScript</span>
                            <span class="badge" style="background-color: cyan;">React</span>
                            <h5 class="card-title">Bill Gates</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ducimus maxime minus modi repellendus eum natus quo molestias facilis accusamus voluptatibus sequi fugiat magni odio asperiores, iste vel, quae odit?</p>
                        </div>
                        <!--<div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>-->
                    </div>
                    
                    <div class="card" style="border: 1;">
                        <img src="img/ada.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-secondary">Negocios</span>
                            <span class="badge bg-danger">Startups</span>
                            <h5 class="card-title">Ada Lovelace</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, repellendus! Corrupti cumque perspiciatis officiis facere voluptas voluptatem quas saepe accusamus odit vitae quaerat, excepturi, consectetur dolorem veritatis tenetur minima? Nam?</p>
                        </div>
                        <!--<div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Las dos fotos-->
    <section id="fotos" class="container-fluid">
        <div class="row" id="ellugar">
            <br>
        </div>
        <div class="row">
            <div class="col-6" style="margin-right:0px;">
                <img src="img/honolulu.jpg" class="img-fluid" alt="Responsive image">    
            </div>
                
            <div class="col-6" style="background-color: rgb(54, 54, 54); margin-left: 0px; color: white;">
                <br>
                <h3>Bs As - Octubre</h3>
                <p style="font-size: small;">Buenos Aires es la provincia y localidad mas grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Ohau, la ciudad y el condado de Honolulu   han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km<sup>2</sup> de superficie)</p>
                <button type="button" class="btn btn-primary btn-sm" style="background-color: rgb(54, 54, 54); color: white; border-color: white;">
                    Conocé más
                </button>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
    </section>
    <!--formulario-->
    <section>
        <div class="container-fluid">
            <div class="row" id="convertirse">
                <br>
            </div>
            <div class="row">
                <p style="font-size: small; text-align: center; margin-bottom: 0px;">CONVIÉRTETE EN UN</p>
                <H3 style="text-align: center; margin-top: 0px;">ORADOR</H3>
                <br>
                <h6 style="text-align: center;">Anótate como orador para dar una <u style="text-decoration-style: dotted;">charla ignite</u>. Cuéntanos de qué quieres hablar!</h6>
            </div>
            <div class="row">
                <div class="col-3">
                
                </div>
                <div class="col-6">
                    <form class="row g-3" action="inscriptos.php" method="post">
                        <div class="col-6">
                            <input type="text" class="form-control" id="nombreFormControlInput1" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="apellidoFormControlInput1" placeholder="Apellido" name="apellido">
                        </div>
                    </form>
                    <br>    
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sobre qué quieres hablar?" name="memo"></textarea>
                    </div>
                    <p style="font-size: small;">Recuerda incluir un título para tu charla</p>
                    <div class="mb-6">
                        <div class="row g-6">
                            <button type="button" class="btn-sm" style="color:whitesmoke; background-color: green; border-color: green;">Enviar</button>  
                        </div>
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </section>     
    <!--pie de pagina-->
    <footer id="footer-menu">
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Preguntas frecuentes
                </div>
                <div class="col" style="text-align: center; text-anchor:middle; align-items: center; justify-content: center; ">
                    <br>
                    Contáctanos
                </div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Prensa    
                </div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Conferencias
                </div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Términos y condiciones
                </div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Privacidad
                </div>
                <div class="col" style="text-align: center; align-items: center; justify-content: center; ">
                    <br>
                    Estudiantes
                </div>
                <div class="col"></div>    
            </div>
            <div class="row">

            </div>
        </div>
    </footer>
</body>
</html>