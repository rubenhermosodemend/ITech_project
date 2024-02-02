<?php
include './paginas/header.php';
session_start();
?>
<body>

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
                  <li><a class="dropdown-item" id="alllink" href="#">All</a></li>
                  <li><a class="dropdown-item" id="processorlink" href="#">Processors</a></li>
                  <li><a class="dropdown-item" id="graphiclink" href="#">Graphics cards</a></li>
                  <li><a class="dropdown-item" id="ramlink" href="#">RAM</a></li>
                  <li><a class="dropdown-item" id="coolinglink" href="#">Cooling systems</a></li>
                  <li><a class="dropdown-item" id="storagelink" href="#">Storage</a></li>
                  <li><a class="dropdown-item" id="chasislink" href="#">Chasis</a></li>
                  <li><a class="dropdown-item" id="powerlink" href="#">Power supply</a></li>
                  <li><a class="dropdown-item" id="screenlink" href="#">Monitors</a></li>
                  <li><a class="dropdown-item" id="peripheralink" href="#">Peripherals</a></li>
                  <li><a class="dropdown-item" id="motherboardlink" href="#">Motherboards</a></li>
                </ul>
  
              </li>
              <li class="nav-item p-4  ">
                <a class="nav-link icon-link-hover cursos fnavbar" href="#" onclick="showSection('courses')">Courses</a>
              </li>
              <li class="nav-item p-4  ">
                <a class="nav-link icon-link-hover boxes fnavbar" href="#" onclick="showSection('boxes')">Boxes</a>
              </li>
              <li class="nav-item p-4  ">
                <a class="nav-link icon-link-hover contact fnavbar" href="#"
                  onclick="showSection('contact')">Contact us</a>
              </li>
              <li class="nav-item p-4  ">
                <a class="nav-link icon-link-hover about_us" href="#" onclick="showSection('about_ourselves')">About us</a>
              </li>
            <?php
            if (isset($_SESSION['user'])){
               echo '<li class="nav-item p-4  ">';
               echo '<a class="nav-link icon-link-hover login" href="./paginas/logout_en.php" ">Log out</a>';
               echo '</li>';
               echo '<li class="nav-item p-4  ">';
               echo '<p style="font-size: 15px ">i am ';
               echo $_SESSION['user'];
               echo '</p>';
               echo '</li>';
             }else{
               echo '<li class="nav-item p-4  ">';
               echo '<a class="nav-link icon-link-hover login" href="./paginas/login_en.php" ">Log in</a>';
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
        <a href="index.html"><img src="./assets/images/españa.png" alt="España" width="40" height="40"></a>
      </nav>
    </header>

  <main>
    <section id="index" style="display: none;">
      <div class="container index_store">
        <div class="row p-3 ">
          <div class=" col-lg-12 my-col-h col-md-12 col-sm-12">
            <p class="h2 section">New products</p>
            <div class="row p-9">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/grafica_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Graphic cards</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">See products</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/chasis_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Cases</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">See products</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-auto" style="width: 18rem;">
                  <img src="./assets/images/cpu_index.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ftitulos"><b>Processors</b></h5>
                    <p class="card-text fcuerpo">Some quick example text to build on the card title and make up the bulk
                      of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">See products</a>
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
                    <a href="#" class="btn btn-primary">See products</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container bg-light">
          <div class=" col-lg-8 my-col-h col-md-12 col-sm-12" style="margin: 0 auto;">
            <p class="h2 section">Our courses</p>
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
                    At ITech, we are committed to providing a unique and specialized space for all technology enthusiasts and IT professionals. 
                    We take pride in offering an innovative environment where you can carry out repairs and modifications to computer devices efficiently and comfortably.
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
                                        <a class="button-link btn btn-primary incrementa" href="#">Add</a>
                                        <a class="button-link btn btn-secondary disminuye" href="#">Quit</a>
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
        <h1 class="h1 mb-4">Courses</h1>
    <p class="lead">
        Welcome to iTech Learning Center - Your Gateway to the Technology of the Future!
        At iTech, we are committed to cutting-edge training that drives growth and innovation in the ever-evolving world of technology.
        Our Learning Center is designed for both businesses and individuals looking to excel in a constantly changing digital environment.
        Explore a world of learning opportunities centered around cutting-edge technologies like
    </p>
</div>

<h1 class="text-center mb-5 display-4">iTech Learning Center Course Catalog</h1>

<div class="row mx-2">
    <div class="col-lg-6">
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <img src="assets/images/kubernetes.png" alt="Course Image" class="float-start me-3" width="150" height="150">
                <h2 class="card-title">Master's in Kubernetes</h2>
                <p class="card-text">Immerse yourself in the Kubernetes ecosystem and learn to orchestrate containers to optimize application deployment. From configuration to scalability, this course will prepare you to lead in the era of containers.</p>
                <a href="#" class="btn btn-primary">View Course</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <img src="assets/images/grafana.png" alt="Course Image" class="float-start me-3" width="150" height="150">
                <h2 class="card-title">Advanced Monitoring and Analysis</h2>
                <p class="card-text">Gain advanced skills in monitoring complex systems. Explore industry-leading tools and learn to interpret data to improve the performance and efficiency of your infrastructure.</p>
                <a href="#" class="btn btn-primary">View Course</a>
            </div>
        </div>
    </div>
</div>

<div class="row mx-2">
    <div class="col-lg-6">
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <img src="assets/images/bases.png" alt="Course Image" class="float-start me-3" width="150" height="150">
                <h2 class="card-title">Distributed Database Management</h2>
                <p class="card-text">Discover modern databases and their efficient management in distributed environments. From NoSQL to new technologies, this course will provide you with the skills needed to manage large datasets.</p>
                <a href="#" class="btn btn-primary">View Course</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <img src="assets/images/devops.avif" alt="Course Image" class="float-start me-3" width="150" height="150">
                <h2 class="card-title">DevOps: Continuous Integration and Continuous Deployment (CI/CD)</h2>
                <p class="card-text">Master DevOps practices with a focus on CI/CD. Learn to automate processes for faster and more reliable deliveries. Boost collaboration between development and operations teams.</p>
                <a href="#" class="btn btn-primary">View Course</a>
            </div>
        </div>
    </div>
</div>

<div class="row mx-2">
    <div class="col-lg-6">
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <img src="assets/images/nube.jpg" alt="Course Image" class="float-start me-3" width="150" height="150">
                <h2 class="card-title">Cloud Security and Data Protection</h2>
                <p class="card-text">Keep your systems secure in today's digital environment. Explore cloud security strategies, data protection, and best practices to mitigate cyber threats.</p>
                <a href="#" class="btn btn-primary">View Course</a>
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
          <h1>How It Works</h1>
          <p>
            Reserve your Box: Visit our website and select the box that best suits your needs and the time you want to
            reserve.
    
            Access the Tools: Once you arrive at our facilities, you will have access to all the tools and equipment
            necessary
            within your box.
    
            Work on Your Project: Get to work and work on your project with peace of mind. If you encounter any problems or
            need
            assistance, our staff will be happy to help.
    
            At ITech, we are committed to providing a welcoming and collaborative environment for you to successfully
            undertake
            your technological projects. We appreciate your support during this first year and look forward to continuing to
            be
            your preferred destination for computer DIY and unforgettable technological experiences.
    
            Thank you for being part of our community!
          </p>
          <br>
          <h1>Where We Are</h1>
          <div class="content">
            <p>
              At Itech, we have experienced significant growth in our provincial scope, establishing various locations with
              specially designed spaces. In the map below, you can visually appreciate our different locations,
              clearly
              identifying the available boxes in each of them and marking the main headquarters located in Pamplona.
            </p>
            <img id="mapaboxes" src="./assets/images/navarra.gif" alt="mapaboxes">
          </div>
    
          <div class="container">
            <h2 class="text-center mb-4">Weekly Schedule</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Day</th>
                  <th scope="col">Morning Schedule</th>
                  <th scope="col">Afternoon Schedule</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Monday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                  <th scope="row">Tuesday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                  <th scope="row">Wednesday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                  <th scope="row">Thursday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                  <th scope="row">Friday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                  <th scope="row">Saturday</th>
                  <td>9:00 AM - 2:00 PM</td>
                  <td>Closed</td>
                </tr>
                <tr>
                  <th scope="row">Sunday</th>
                  <td>Closed</td>
                  <td>Closed</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="container mt-4">
          <h2 class="text-center">Box Reservation Form</h2>
    
          <form>
            <div class="form-group">
              <label for="locality">Locality:</label>
              <select class="form-control" id="locality" name="locality">
                <option value="">--Select locality--</option>
                <option value="Pamplona">Pamplona</option>
                <option value="Sanguesa">Sanguesa</option>
                <option value="Tafalla">Tafalla</option>
                <option value="Estella">Estella</option>
                <option value="Tudela">Tudela</option>
              </select>
            </div>
    
            <div class="form-group">
              <label for="boxNumber">Box Number:</label>
              <select class="form-control" id="boxNumber" name="boxNumber">
                <option value="">--Select a number--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
    
            <div class="form-group">
              <label for="dayOfWeek">Day of the Week:</label>
              <select class="form-control" id="dayOfWeek" name="dayOfWeek">
                <option value="">--Select a day of the week--</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
              </select>
            </div>
    
            <div class="form-group">
              <label for="startTime">Start Time:</label>
              <select class="form-control" id="startTime" name="startTime">
                <option value="">--Select a start time--</option>
                <option value="09:00">9:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="13:00">1:00 PM</option>
                <option value="14:00">2:00 PM</option>
                <option value="17:00">5:00 PM</option>
                <option value="18:00">6:00 PM</option>
                <option value="19:00">7:00 PM</option>
                <option value="20:00">8:00 PM</option>
              </select>
            </div>
    
            <div class="form-group">
              <label for="endTime">End Time:</label>
              <select class="form-control" id="endTime" name="endTime">
                <option value="">--Select an end time--</option>
                <option value="09:00">9:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="13:00">1:00 PM</option>
                <option value="14:00">2:00 PM</option>
                <option value="17:00">5:00 PM</option>
                <option value="18:00">6:00 PM</option>
                <option value="19:00">7:00 PM</option>
                <option value="20:00">8:00 PM</option>
              </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Reserve</button>
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
            <p class="h2 section">Who are we?</p>
            <p>
              ITech is a company mainly dedicated to information technology, covering areas such as education on the
              subject, the sale of necessary components, and the provision of specialized spaces for certain actions.
              This company arises from the need to reduce the digital divide and help advance society through people's
              education, provide components or devices to those who need them, and offer specific spaces where people
              can make improvements, update components, repair devices...
            </p>
          </div>
          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="rounded mx-auto d-block my-img-size" src="./assets/images/icono_itech.png" alt="who-we-are">
          </div>
        </div>

        <div class="row p-5 bg-light">

          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/mission.png"
              alt="msi laptop">
          </div>
          <div class="col col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Mission</p>
            <p>
              Our mission is to help the community by educating anyone and enabling the communication of learning by
              offering specialized areas and the necessary components.
            </p>
          </div>
        </div>
        <div class="row p-5 ">
          <div class=" col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Vision</p>
            <p>
              We aim to be leaders in reducing the digital divide and technological innovation in Navarra.
            </p>
          </div>
          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/vision.jpg"
              alt="msi laptop">
          </div>
        </div>
        <div class="row p-5 bg-light">

          <div class="col-lg-4 my-col-h col-md-6 col-sm-12">
            <img class="w-30 h-50 rounded mx-auto d-block my-img-size" src="./assets/images/values.jpg"
              alt="msi laptop">
          </div>
          <div class="col col-lg-8 my-col-h col-md-6 col-sm-12">
            <p class="h2 section">Values</p>
            <p>
              <ul>
                <li>Committed to providing effective and bearable technical assistance and computer education while
                  helping the environment by refurbishing old components and giving them a new life.</li>
                <li>Passion for technology</li>
                <li>Effective, self-taught, and inclusive education</li>
                <li>Reduction of environmental impact (4R)</li>
                <li>Assistance at all times</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="row" id="whoarewe">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="h2 section">Our Team</p>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p id="organigram"> <img src="./assets/images/organigram.png" alt="organigram"> </p>
          </div>
          <div>
            <ul id="team">
              <li class="h4">Rubén Hermoso de Mendoza</li>
              <ul id="chairman">
                <li>President, CEO of the company, and head of the courses department.</li>
              </ul>
              <br>
              <li class="h4">Eduard Mizdran</li>
              <ul>
                <li>Marketing Director and Social Media Management.</li>
              </ul>
              <br>
              <li class="h4">Ibra</li>
              <ul>
                <li>Marketing Director and Social Media Management.</li>
              </ul>
              <li class="h4">Daniel Goñi</li>
              <ul>
                <li>Director of the boxes department.</li>
              </ul>
              <br>
              <li class="h4">Iván Olcoz</li>
              <ul>
                <li>Director of the management and sales department.</li>
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
