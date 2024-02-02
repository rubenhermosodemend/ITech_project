<?php
include './paginas/header.php';
session_start();
?>
<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
      <div class="container-fluid lh-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active icon-link-hover home" aria-current="page" href="#"
                onclick="showSection('index')">
                <p class="navbar-brand fs-1 navbar-brand my-auto min-width"><img
                    src="./assets/images/Itech_white-transformed.png" alt="Logo" width="150" height="50"
                    class="d-inline-block align-text-top ">
                </p>
              </a>
            </li>
            <li class="nav-item dropdown p-4">
              <a class="nav-link dropdown-toggle" href="#" onclick="showSection('tienda')" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tienda
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="alllink" href="#">Todos</a></li>
                <li><a class="dropdown-item" id="processorlink" href="#">Procesadores</a></li>
                <li><a class="dropdown-item" id="graphiclink" href="#">Tarjetas gráficas</a></li>
                <li><a class="dropdown-item" id="ramlink" href="#">RAM</a></li>
                <li><a class="dropdown-item" id="coolinglink" href="#">Refrigeración</a></li>
                <li><a class="dropdown-item" id="storagelink" href="#">Almacenamiento</a></li>
                <li><a class="dropdown-item" id="chasislink" href="#">Chasis</a></li>
                <li><a class="dropdown-item" id="powerlink" href="#">Fuentes de alimentación</a></li>
                <li><a class="dropdown-item" id="screenlink" href="#">Monitores</a></li>
                <li><a class="dropdown-item" id="peripheralink" href="#">Periféricos</a></li>
                <li><a class="dropdown-item" id="motherboardlink" href="#">Placas Base</a></li>
              </ul>

            </li>
            <li class="nav-item p-4  ">
              <a class="nav-link icon-link-hover cursos fnavbar" href="#" onclick="showSection('courses')">Cursos</a>
            </li>
            <li class="nav-item p-4  ">
              <a class="nav-link icon-link-hover boxes fnavbar" href="#" onclick="showSection('boxes')">Boxes</a>
            </li>
            <li class="nav-item p-4  ">
              <a class="nav-link icon-link-hover contact fnavbar" href="#"
                onclick="showSection('contact')">Contáctanos</a>
            </li>
            <li class="nav-item p-4  ">
              <a class="nav-link icon-link-hover about_us" href="#" onclick="showSection('about_ourselves')">Sobre
                nosotros</a>
            </li>
            <?php
            if (isset($_SESSION['user'])){
               echo '<li class="nav-item p-4  ">';
               echo '<a class="nav-link icon-link-hover login" href="./paginas/logout.php" ">Log out</a>';
               echo '</li>';
               echo '<li class="nav-item p-4  ">';
               echo '<p style="font-size: 15px ">Soy ';
               echo $_SESSION['user'];
               echo '</p>';
               echo '</li>';
             }else{
               echo '<li class="nav-item p-4  ">';
               echo '<a class="nav-link icon-link-hover login" href="./paginas/login.php" ">Log in</a>';
               echo '</li>';
             }
            ?>
            <li class="nav-item p-4">
              <div class="btn-group px-2">
                  <button class="btn btn-secondary btn-lg dropdown-toggle btn-sm" id="reductedbutton"
                      type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="./assets/images/carrito.png" alt="carrito" width="25" height="25">
                  </button>
                  <ul class="dropdown-menu" id="carrito">
                  </ul>
              </div>
          </li>
          </ul>
        </div>
      </div>
      <a href="index-ingles.html"><img src="./assets/images/ingles.avif" alt="Ingles" width="40" height="40"></a>
    </nav>
  </header>

  <main>
    <section id="index" style="display: none;">
      <div class="container index_store">
        <div class="row p-3 ">
          <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
            <p class="h2 section">Nuevos productos</p>
            <div class="row p-9">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/grafica_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Gráficas</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/chasis_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Chásis</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/cpu_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Procesadores</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/ram_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>RAMs</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container bg-light">
          <div class=" col-lg-8 my-col-h col-md-12 col-sm-12" style="margin: 0 auto;">
            <p class="h2 section">Nuestros cursos</p>
            <div id="carouselExampleIndicators" class="carousel slide" width="80%" height="80%">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/images/ofimatic_course_index.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/images/curso-informatica-basica.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/images/cursos_de_informatica_mayores.jpg" class="d-block w-100 h-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row p-3 ">
            <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
              <p class="h2 section">Boxes</p>
              <div class="row">
                <div class="col-lg-8">
                  <p>
                    En ITech, estamos comprometidos en proporcionar un espacio único y especializado para
                    todos los entusiastas de la tecnología y profesionales de la informática. Nos enorgullece ofrecer un
                    entorno innovador donde puedes llevar a cabo reparaciones y modificaciones en dispositivos
                    informáticos de
                    manera eficiente y cómoda.
                  </p>
                </div>
                <div class="col-lg-4">
                  <img src="./assets/images/index_boxes.jpg" class="img-fluid" alt="">
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

          </div>
        </div>
      </div>
    </section>

    <section id="tienda" style="display: none;">
      <br>
        <div class="container chasis_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>CHASIS:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Corsair</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/Chasis_Corsair_4000D.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair ICUE 4000D</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        119,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/corsair_icue_5000t.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair ICUE 5000T</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        122,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/Corsair_3000D_RGB.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair 3000D RGB </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        150€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">NOX</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/Infinity_omega.png" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Infinity Omega</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        134,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/NXINFIFTYGAMMA.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>NXINFTYGAMMA NOX</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                        
                                        110,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/Hummer_tgx.png" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Hummer TGX Rainbow</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        133,22€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">AeroCool</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/aerocool1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Aerocool GENESISV2BK</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        129,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/aerocool2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Aerocool Wavebkv3</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        140€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/chasis/aerocool3.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Aerocool Mecha ARGB </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        99,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <div class="container cooling_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>REFRIGERACIÓN:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Tempest Gaming</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/cooling1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Tempest Gaming Liquid </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        39,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/cooling2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Tempest Cooler 4Pipes</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        28,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Forgeon</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/forgeon1.png" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Forgeon Solarian 4Pipes</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        36,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/forgeon2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Forgeon Azoth 240</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        22,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Corsair</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/corsair1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair Liquida H60i XT </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        50€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/cooling/corsair-a500-ventilador-cpu.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair A500</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        44,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>





            <br>
        </div>

        <div class="container processor_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>PROCESADORES:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Intel</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/i5.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Intel® Core™ i5-10400F</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        90,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/i7.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Intel Core i7-13700K</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        110,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/i9.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b> Core i9 11900F </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        190,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">AMD</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/ryzen1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Ryzen 9 7900X3D</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        95,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/ryzen2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Ryzen 9 7950X</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        120€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/processor/ryzen3.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Ryzen 5 3400G AM4</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        210,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
        </div>

        <div class="container RAM_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>RAMs:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Corsair</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/ram/corsairram1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair 16 GB DDR4</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        20,36€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/ram/corsairram2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair 32 GB (2 x 16 GB)</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        39,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">TEAMGROUP</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/ram/tforce1.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>T-Force Delta DDR5 (2x16)</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        42,50€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/ram/tforce2.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Elite 16GB (2x8GB) DDR4</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        36,20€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <br>

            <br>
        </div>

        <div class="container graphic_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>TARJETAS GRÁFICAS:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/graphics/gcard1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>GeForce RTX 4080 16GB </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        550,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/graphics/gcard2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>GeForce RTX 4070 Ti </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        508,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/graphics/gcard3.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>GeForce RTX 3080 Ti </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        399,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <div class="container storage_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>ALMACENAMIENTO:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">WD</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/st1.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>WD 4 TB Elements Portable</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        90,16€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/st2.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>WD My Book 16TB</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        240,55€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/st3.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>WD SSD Inner 1TB </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        66,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Samsung</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/sts1.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Samsung SSD 980 2TB</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        119,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/sts2.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>SSD EXTERNO SAMSUNG T7 1TB</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        39,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/storage/sts3.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Samsung 980 500 GB </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        20,50€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <br>
        </div>

        <div class="container motherboard_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>PLACAS BASE:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">ASUS</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/asus1.png" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>ASUS PRIME Z690-A</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        109,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/asus2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>ASUS ROG Strix Z690-E Gaming</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        119,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/asus3.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>ASUS ROG Strix B550</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        111,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">MSI</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/msi1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>MSI mag B550 Tomahawk Gaming</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        134,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/msi2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>MSI PRO Z690-A WiFi </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        124,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/msi3.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>MSI B550 GAMING GEN3</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        132,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">AORUS</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/aorus1.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>B550 AORUS ELITE V2</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        145,22€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/aorus2.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Z390 AORUS PRO (rev. 1.0)</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        99,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/motherboard/aorus3.png" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>AORUS B450 ELITE V2 </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        125€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
        </div>

        <div class="container power_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>FUENTES DE ALIMENTACIÓN:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/power/p1.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair RM1000x modular</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        56,19€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/power/p2.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Mars Gaming MPIII550</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/power/p3.jpg" class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b> Sagitta X 1000W NFORTEC</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        110,90€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="container peripheral_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>PERIFÉRICOS:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Corsair</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/corsairkeyboard.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Gaming Corsair K70 PRO</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        44,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/corsairheadset.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair VOID ELITE RGB Wireless</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        80€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/corsairmouse.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Corsair Dark Core RGB Wireless</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        60,20€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-light">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">LOGITECH</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/logitechkeyboard.png"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>LOGITECH PRO X</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                    29,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/logitechheadset.png"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>LOGITECH G432 7.1 </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        56,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/logitechmouse.png"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>LOGITECH PRO Wireless</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        49,10€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 ">
                <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
                    <p class="h2 section">Razer</p>
                    <br>
                </div>
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/razerkeyboard.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Razer BlackWidow V4 Pro</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        48,50€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/razerheadset.jpg"
                                    class="card-img-top" alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Razer Kraken Gaming </b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        66,20€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/peripherals/razermouse.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Razer Basilisk V3</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        48,95€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
        </div>

        <div class="container screen_store">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>MONITORES:</h2>
                </div>
            </div>
            <div class="row p-3 ">
                <div class="row p3 justify-content-center">
                    <div class="row p-9">
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/screen/asusmonitor.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>ASUS TUF VG27VH1B</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        237,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/screen/hpmonitor.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Monitor HP LED, IPS 23,8"</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        210,99€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons" id="chasis1">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="card my-auto mx-auto" style="width: 18rem;">
                                <img src="./assets/images/store_images/screen/samsungmonitor.jpg" class="card-img-top"
                                    alt=".">
                                <div class="card-body">
                                    <h5 class="card-title ftitulos"><b>Monitor Samsung U28R550UQP</b></h5>
                                    <p class="card-text fcuerpo">Some quick example text to build on the card title
                                        and
                                        make up the bulk
                                        of the
                                        card's content.</p>
                                         
                                        190€
                                        <br>
                                        <br>
                                    <div class="gorup-buttons">
                                        <a class="button-link btn btn-primary incrementa" href="#">Agregar</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
        <br>
    </section>

    <section id="courses" style="display: none;">
      <div class="container mt-5">
        <h1 class="h1 mb-4">Cursos</h1>
        <p class="lead">
          ¡Bienvenido a iTech Learning Center - Tu Puerta de Entrada a la Tecnología del Futuro!
          En iTech, estamos comprometidos con la formación de vanguardia que impulsa el crecimiento y la innovación en
          el
          mundo de la tecnología.
          Nuestro Learning Center está diseñado para empresas y particulares que buscan sobresalir en un entorno
          digital
          en
          constante evolución.
          Descubre un mundo de oportunidades de aprendizaje centradas en tecnologías punteras como
        </p>
      </div>



      <h1 class="text-center mb-5 display-4">Catálogo de Cursos iTech Learning Center</h1>

      <div class="row mx-2">
        <div class="col-lg-6">
          <div class="card mb-4 bg-light">
            <div class="card-body">
              <img src="assets/images/kubernetes.png" alt="Imagen del curso" class="float-start me-3" width="150"
                height="150">
              <h2 class="card-title">Maestría en Kubernetes</h2>
              <p class="card-text">Sumérgete en el ecosistema de Kubernetes y aprende a orquestar contenedores para
                optimizar el despliegue de aplicaciones. Desde la configuración hasta la escalabilidad, este curso te
                preparará para liderar en la era de los contenedores.</p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="card mb-4 bg-light">
            <div class="card-body">
              <img src="assets/images/grafana.png" alt="Imagen del curso" class="float-start me-3" width="150"
                height="150">
              <h2 class="card-title">Monitorización y Análisis Avanzado</h2>
              <p class="card-text">Adquiere habilidades avanzadas en la monitorización de sistemas complejos. Explora
                herramientas líderes en la industria y aprende a interpretar datos para mejorar el rendimiento y la
                eficiencia de tu infraestructura.</p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-2">
        <div class="col-lg-6">
          <div class="card mb-4 bg-light">
            <div class="card-body">
              <img src="assets/images/bases.png" alt="Imagen del curso" class="float-start me-3" width="150"
                height="150">
              <h2 class="card-title">Gestión de Bases de Datos Distribuidas</h2>
              <p class="card-text">Descubre las bases de datos modernas y su gestión eficiente en entornos
                distribuidos.
                Desde NoSQL hasta nuevas tecnologías, este curso te proporcionará las habilidades necesarias para
                gestionar
                grandes conjuntos de datos.</p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card mb-4 bg-light">
            <div class="card-body">
              <img src="assets/images/devops.avif" alt="Imagen del curso" class="float-start me-3" width="150"
                height="150">
              <h2 class="card-title">DevOps: Integración Continua y Despliegue Continuo (CI/CD)</h2>
              <p class="card-text">Domina las prácticas de DevOps con enfoque en CI/CD. Aprende a automatizar procesos
                para
                lograr entregas más rápidas y confiables. Impulsa la colaboración entre equipos de desarrollo y
                operaciones.
              </p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-2">
        <div class="col-lg-6">
          <div class="card mb-4 bg-light">
            <div class="card-body">
              <img src="assets/images/nube.jpg" alt="Imagen del curso" class="float-start me-3" width="150"
                height="150">
              <h2 class="card-title">Seguridad en la Nube y Protección de Datos</h2>
              <p class="card-text">Mantén tus sistemas seguros en el entorno digital actual. Explora estrategias de
                seguridad en la nube, protección de datos y mejores prácticas para mitigar amenazas cibernéticas.</p>
              <a href="#" class="btn btn-primary">Ver curso</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
    </section>
    <section id="boxes" style="display: none;">
      <div class=" mx-3 my-4">
        <div class="container">
          <h1>Como funciona</h1>
          <p>
            Reserva tu Box: Visita nuestro sitio web y selecciona el box que mejor se adapte a tus necesidades y el
            tiempo
            que
            deseas reservar

            Accede a las Herramientas: Una vez que llegues a nuestras instalaciones, tendrás acceso a todas las
            herramientas
            y
            equipos necesarios dentro de tu box.

            Trabaja en tu Proyecto: Ponte manos a la obra y trabaja en tu proyecto con tranquilidad. Si encuentras algún
            problema o necesitas ayuda, nuestro personal estará encantado de asistirte.

            En ITech, estamos comprometidos a proporcionar un entorno acogedor y colaborativo para que puedas llevar a
            cabo
            tus proyectos tecnológicos de manera exitosa. Agradecemos tu apoyo durante este primer año y esperamos
            seguir
            siendo tu destino preferido para el bricolaje informático y las experiencias tecnológicas inolvidables.

            ¡Gracias por ser parte de nuestra comunidad!
          </p>
          <br>
          <h1>Donde nos encontramos</h1>
          <div class="content">
            <p>
              En Itech, hemos experimentado un crecimiento significativo en nuestro ámbito provincial, estableciendo
              diversas
              ubicaciones que cuentan con espacios especialmente diseñados. En el mapa que se presenta a continuación,
              podrán
              apreciar visualmente nuestras distintas localizaciones, identificando claramente los boxes disponibles en
              cada
              una
              de ellas y marcada la sede principal que se encuentra en Pamplona.
            </p>
            <img id="mapaboxes" src="./assets/images/navarra.gif" alt="mapaboxes">
          </div>

          <div class="container">
            <h2 class="text-center mb-4">Horario Semanal</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Día</th>
                  <th scope="col">Horario Mañana</th>
                  <th scope="col">Horario Tarde</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Lunes</th>
                  <td>9:00 - 14:00</td>
                  <td>17:00 - 20:00</td>
                </tr>
                <tr>
                  <th scope="row">Martes</th>
                  <td>9:00 - 14:00</td>
                  <td>17:00 - 20:00</td>
                </tr>
                <tr>
                  <th scope="row">Miércoles</th>
                  <td>9:00 - 14:00</td>
                  <td>17:00 - 20:00</td>
                </tr>
                <tr>
                  <th scope="row">Jueves</th>
                  <td>9:00 - 14:00</td>
                  <td>17:00 - 20:00</td>
                </tr>
                <tr>
                  <th scope="row">Viernes</th>
                  <td>9:00 - 14:00</td>
                  <td>17:00 - 20:00</td>
                </tr>
                <tr>
                  <th scope="row">Sábado</th>
                  <td>9:00 - 14:00</td>
                  <td>Cerrado</td>
                </tr>
                <tr>
                  <th scope="row">Domingo</th>
                  <td>Cerrado</td>
                  <td>Cerrado</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="container mt-4">
          <h2 class="text-center">Formulario de Reserva de Boxes</h2>

          <form>
            <div class="form-group">
              <label for="localidad">Localidad:</label>
              <select class="form-control" id="localidad" name="localidad">
                <option value="">--Seleciona localidad--</option>
                <option value="Pamplona">Pamplona</option>
                <option value="Sanguesa">Sanguesa</option>
                <option value="Tafalla">Tafalla</option>
                <option value="Estella">Estella</option>
                <option value="Tudela">Tudela</option>
              </select>
            </div>

            <div class="form-group">
              <label for="numeroBox">Número del Box:</label>
              <select class="form-control" id="numeroBox" name="numeroBox">
                <option value="">--Selecciona un número --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>

            <div class="form-group">
              <label for="diaSemana">Día de la Semana:</label>
              <select class="form-control" id="diaSemana" name="diaSemana">
                <option value="">--Selecciona un dia de la semana --</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sábado</option>
              </select>
            </div>

            <div class="form-group">
              <label for="horaInicio">Hora de Inicio:</label>
              <select class="form-control" id="horaInicio" name="horaInicio">
                <option value="">--Selecciona una hora de inicio --</option>
                <option value="09:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
              </select>
            </div>

            <div class="form-group">
              <label for="horaFin">Hora de Finalización:</label>
              <select class="form-control" id="horaFin" name="horaFin">
                <option value="">--Selecciona una hora de fin --</option>
                <option value="09:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Reservar</button>
          </form>
        </div>

      </div>
      <br>
      <br>
      <br>
    </section>
    <section id="contact" style="display: none;">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <iframe class="border"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.29969206553!2d-1.6624290240436042!3d42.824282871153564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092855cefdac7%3A0xab7c62765f5209e2!2sCuatrovientos%20Centro%20Integrado!5e0!3m2!1ses!2ses!4v1702625977619!5m2!1ses!2ses"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <br>
            <a href="incidencias.html">Ir a sección de incidencias para reportar una incidencia</a>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="container align-items-center py-2">
              <h2>Contacta con nosotros</h2>
              <form class="form-center border p-3 bg-light">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                  <label class="form-label" for="form4Example3">Mensaje</label>
                </div>

                <h4>Envíanos tu currículum</h4>

                <div class="mb-3">

                  <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf, .doc, .docx">

                </div>
                <button type="submit" class="btn btn-primary">Subir Archivo</button>


                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                  <label class="form-check-label" for="form4Example4">
                    Mándame una copia de este mensaje
                  </label>
                </div>
                <button type="submit" class="btn btn-secondary">Enviar</button>

              </form>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about_ourselves" style="display: none;">
      <div class="container">
        <div class="row p-5 ">
          <div class=" col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">¿Quienes somos?</p>
            <p>
              ITech es una empresa dedicada principalmente a la informática cubriendo ámbitos como la educación en el
              tema, la venta de componentes necesarios y la disposición de espacios especializados para realizar ciertas
              acciones. Esta empresa surge de la necesidad de reducir la brecha digital y ayudar en el avance de la
              sociedad mediante la educación de la gente, proveer de componentes o dispositivos a aquellos que lo
              necesiten y ofrecer espacios concretos donde la gente pueda realizar mejoras, actualizar componentes,
              reparar dispositivos…</p>
          </div>
          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="rounded mx-auto d-block my-img-size" src="./assets/images/icono_itech.png" alt="quienes-somos">
          </div>
        </div>

        <div class="row p-5 bg-light">

          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/mision.png"
              alt="msi laptop">
          </div>
          <div class="col col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Misión</p>
            <p>
              Nuestra misión es ayudar a la comunidad educando a cualquier persona y permitir la comunicación del
              aprendizaje ofreciendo zonas especializadas y los componentes necesarios.</p>
          </div>
        </div>
        <div class="row p-5 ">
          <div class=" col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Visión</p>
            <p>
              Tenemos el objetivo de ser referentes en la reducción de la brecha digital y la innovación tecnológica en
              Navarra</p>
          </div>
          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/vision.jpg"
              alt="msi laptop">
          </div>
        </div>
        <div class="row p-5 bg-light">

          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/valores.jpg"
              alt="msi laptop">
          </div>
          <div class="col col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Valores</p>
            <p>
            <ul>
              <li>Estar comprometidos a dar una asistencia técnica y una enseñanza informática de manera efectiva y
                llevadera y ayudando al medio ambiente reacondicionando los componentes viejos y dándoles otra vida.
              </li>

              <li>Pasión por la tecnología</li>

              <li>Enseñanza efectiva, autodidacta y para todos</li>

              <li>Reducción del impacto medioambiental (4R)</li>

              <li>Asistencia en todo momento</li>

            </ul>
            </p>
          </div>
        </div>
        <div class="row" id="whoarewe">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="h2 section">Nuestro equipo</p>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p id="organigram"> <img src="./assets/images/organigram.png" alt="oeganigrama"> </p>
          </div>
          <div>
            <ul id="team">
              <li class="h4">Rubén Hermoso de Mendoza</li>
              <ul id="chairman">
                <li>Presidente, CEO de la compañía y encargado del departamento de cursos.</li>
              </ul>
              <br>
              <li class="h4">Eduard Ionut Mizdran</li>
              <ul>
                <li>Director de marketing y gestión de redes sociales.</li>
              </ul>
              <br>
              <li class="h4">Ibrahim Bah Diallo</li>
              <ul>
                <li>Director de marketing y gestión de redes sociales.</li>
              </ul>
              <li class="h4">Daniel Goñi</li>
              <ul>
                <li>Director del departamento de boxes.</li>
              </ul>
              <br>
              <li class="h4">Iván Olcoz</li>
              <ul>
                <li>Director del departamento de gestión y ventas.</li>
              </ul>
              <br>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </section>
  </main>


  <footer class="bg-secondary p-2">
    <p class="fs-6 text-center">
      ITech 2023-2024©
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-youtube"></a>
    </p>

  </footer>

<?php
include './paginas/footer.php';
