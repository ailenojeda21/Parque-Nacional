<?php
include("../Modelo/conexion.php"); 
//Seleccionar registros de portafolio

$sentencia=$conexion->prepare("SELECT * FROM actividades");
$sentencia->execute();
$lista_actividades=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Historia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Biodiversidad</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Actividades</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactoo">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Monumento Natural y Parque Nacional</div>
                <div class="masthead-heading text-uppercase">BOSQUES PETRIFICADOS DE JARAMILLO</div>
                <div class="masthead-subheading">Provincia de Santa Cruz</div>
            </div>
        </header>
         <!-- About-->
         <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">HISTORIA</h2>
                    <h3 class="section-subheading text-muted" style="font-size: 18px;">El Parque Nacional Bosques Petrificados de Jaramillo
                     depende de la Administración de Parques Nacionales, posee 78.000 ha, 63.000ha de Parque Nacional y 15.000 ha declaradas Monumento Natural, la cual es
                     la categoría más alta de conservación en el país.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/coniferas.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            
                                <h4 class="subheading">Período Jurásico</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Hace 150 millones de años atrás, en el período Jurásico medio superior, que corresponde a la edad del yacimiento fósil, se daban condiciones particulares en la Tierra. En ese momento, los continentes aún no se habían separado, la cordillera de los Andes no existía, y el clima prevaleciente era húmedo y templado.

En este entorno, se desarrollaban extensos bosques compuestos mayormente por gigantescas coníferas. Estas coníferas tenían características notables, pudiendo vivir más de 1000 años y alcanzando alturas de más de 100 metros. Además de estas imponentes coníferas, el paisaje incluía otras especies como helechos, palmeras y la presencia de dinosaurios de cuello largo.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/volcano.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                              
                                <h4 class="subheading">Petrificación</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Cuando los continentes comenzaron a separarse, la actividad volcánica aumentó y los cambios atmosféricos provocaron fuertes vientos
                    huracanados (hasta 300 km/hs) que derribaron a los árboles. Por eso están dispuestos,en general de oeste hacia eleste,
                    quedando luego completamente cubiertos por un grueso manto de ceniza (más de 100 mts de profundidad). Esa fue la condición que preservó a las
                    Araucarias de la temprana descomposición natural posibilitando la petrificación o silicificación.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/troncos.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Restos Fosilizados</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Durante años y a través del proceso de infiltración, ingresaron
                                a través de las cenizas , distintos minerales, principalmente sílice. Las sales de silicio disueltas por el paso del agua de
                                lluvia através de las capas de ceniza fueron adueñándose de las formas de la madera, copiando con tanta fidelidad su
                                estructura que hoy los científicos al examinar bajo el microscopio pueden ver los restos fosilizados, las células y
                                otras características propias de un árbol (corteza, anillos de crecimiento, huecos y nudos, entre otros). Así, convertido en
                                rocas, nuestro bosque aguardó en las entrañas australes que la lluvia y el viento lo exhumaran mediante procesos de erosión natural.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/Fosiles.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               
                                <h4 class="subheading">Formación Patagoniense</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Hace aproximadamente 75 millonesde años
                                hubo una ingresión marina, es por ello que también se encuentran ESPECIES FÓSILES DE: bivalvos, turritelas, dientes de tiburón.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/arqueologia.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Arqueología</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">El área es también muy importante antropológicamente ya que conserva más de 40 sitios arqueológico. Hasta hace muy pocos años, se
creía que el hombre había ingresado a América por el norte (Alaska) desde Siberia hace unos 9.000 años.
Gracias a los estudios realizados aquí junto con estudios en Monte Verde (Chile), se encontraron
sitios que superan esa edad. Los registros más antiguos en la zona datan de 13.000 años de
antigüedad. Se pueden observar puntas de flecha que confeccionaban con duras rocas (percutores) y
maderas petrificadas (materia prima). Estos instrumentos eran utilizados por sociedades de
cazadores-recolectores para la confección de sus herramientas, para cazar, despostar y trozar alimentos. También hay trahuiles
(boleadoras), restos de cerámica, morteros fijos o móviles y se han encontrado petroglifos y enterratorios.</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/z21468mm7sg?si=1lmg0NQpkSakO87d" title="YouTube video player" frameborder="0"   style="display: block; margin: auto;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Biodiversidad</h2>
                  
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa-regular fa-sun text-primary"></i>
   
                        </span>
                        <h4 class="my-3">Clima</h4>
                        <p class="text-muted">Frío, árido y ventoso, con gran amplitud térmica diaria. Las temperaturas medias son de 19°C en verano (con máximas de hasta 40°C) y 7°C en invierno (con mínimas de -15°C). Hasta 200 mm anuales de lluvia, concentrados en la época invernal; nevadas de consideración en los meses más fríos; y vientos predominantes del oeste a un promedio de 70 km/h, con ráfagas superiores a los 140 km/h. La temporada ideal para visitarlo es primavera y verano.

</p>
                    </div>
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fa-solid fa-seedling text-primary"></i>
                        
                        </span>
                        <h4 class="my-3">Flora</h4>
                        <p class="text-muted">Las características principales de la vegetación de la Patagonia árida está relacionada con la
                            existencia de un ambiente que presenta: suelos arenosos, pedregoso con poca materia orgánica e
                            índice bajo de nutrientes, y clima sumamente hostil. Las plantas desarrollaron defensas aptas para enfrentar sequías, fuertes vientos, elevada radiación solar y bajas temperaturas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-crow text-primary"></i>
                        
                        </span>
                        <h4 class="my-3">Fauna</h4>
                        <p class="text-muted">Como representantes de la fauna local actual se pueden observar, entre las aves, choiques, loicas y tucúqueres (un enorme búho); y entre los mamíferos más conspicuos guanacos, piches y zorros grises.</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
            <a href="/parques/Vista/galeria2.php" class="btn btn-primary btn-xl text-uppercase">GALERIA</a>
            <a href="/parques/Vista/especies.php" class="btn btn-primary btn-xl text-uppercase">ESPECIES</a>
    </div>
        </section>






        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ACTIVIDADES</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
<!--$lista_actividades: Es el array o iterable sobre el cual estás iterando.
$registros: Es una variable que tomará el valor de cada elemento en $lista_actividades en cada iteración-->
                <?php foreach($lista_actividades as $registros){  ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo$registros["ID"];  ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/<?php echo $registros["imagen"]; ?>" />
                            </a>
                            <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php echo $registros["titulo"]; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $registros["subtitulo"]; ?></div>
                            </div>
                        </div>
                        </div>
                          <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo$registros["ID"];  ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $registros["subtitulo"]; ?></h2>
                                    <br><br>

                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/<?php echo $registros["imagen"]; ?>" alt="..." />
                                    <p> <?php echo $registros["descripcion"]; ?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Recorrido:</strong>
                                            <?php echo $registros["recorrido"]; ?>
                                        </li>
                                        <li>
                                            <strong>Duración:</strong>
                                            <?php echo $registros["duracion"]; ?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <?php } ?>  

                   
 <section>

<div style="text-align: center;">
    <h3 name="contactoo" id="contactoo" >CONTACTO</h3>
    <br><br>
    <P><i class="fa-solid fa-location-dot" style="font-size: 24px; margin-right: 10px;"></i>Dirección de intendencia: Calle Teófilo Martinez s/n localidad de Jaramillo, provincia de Santa Cruz CD: 9053</P>
    <p><i class="fa-solid fa-phone" style="font-size: 24px; margin-right: 10px;"></i>Teléfono 01129853800 </p>
    <p><i class="fa-solid fa-envelope"style="font-size: 24px; margin-right: 10px;"></i>Correo electrónico mnbp-apn@hotmail.com</p>
</div>

</section>
        
       
      <!--   Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Contactanos</h>
                   
                </div>
               
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Telefono *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Telefono requerido.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Mensaje enviado!</div>
                           
                            <br />
                           
                        </div>
                    </div>
                   
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar mensaje!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensaje</button></div>
                </form>
            </div>
        </section>
<!-- Footer-->
<footer class="footer py-4">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
      <div class="col-lg-4 my-3 my-lg-0">

        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100069082065022" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mnypn.bosquespetrificados/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>

      </div>
      <div class="col-lg-4 text-lg-end">
        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
      </div>
    </div>
  </div>
</footer
           Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
