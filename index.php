<?php
    include_once('header.php');
    $buttonText = 'Ver detalles';
?>
    <section class="hidden" style="margin-top: 100px;
    text-align: center;">
        <img src="img/HAlogo2.png" alt="" style="width: 300px;">
    </section>

    <!--carrousel-->
    <section style="overflow-x:hidden;overflow-y:hidden">
        <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li>
                    <img src="img/hotel_room_wallpaper_coll_hd.jpg" alt="hotel_room_wallpaper_coll_hd" title="Hospedaje America" id="wows1_0"/>
                </li>
                <li>
                    <img src="img/hotel_room_wallpaper_coll_hd.jpg" alt="Print_Kempinski-Ambience-Hotel-Delhi-GuestRoom" title="Seguridad" id="wows1_1"/>
                </li>
                <li>
                    <img src="img/hotel_room_wallpaper_coll_hd.jpg" alt="slider" title="Confort" id="wows1_2"/>
                </li>
                <li>
                    <img src="img/hotel_room_wallpaper_coll_hd.jpg" alt="deluxe_w_dresser" title="Comodidad" id="wows1_3"/>
                </li>
            </ul>
        </div>
        <div class="ws_bullets">
        </div>
        <div class="ws_shadow"></div>
        </div>
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
    </section>
    <!--carrousel-->

    <!-- list-->
    <section class="" style="margin:50 0 0 0; padding-top: 50px" style="background-color:#d2b29d">
        <div class="container">
            <div class="row">
                <div class="page-header tittle-ha">
                    <h1 class="titlediv" style="text-align:center;">
                      <strong>
                        Nuestras Habitaciones
                      </strong>
                    </h1>
                    <div class="underline-tittle"></div>
                </div>
                <div class="card-text text-information" style="padding-bottom: 70px">
                    <p class="text-aside">
                        Las habitaciones simples, comprenden de una habitacion individual, ideal para personas solteras que disfrutan de la tranquilidad y serenidad y/o gozen del silencio para leer un libro o disfrutar de sus pasatiempos favoritos.
                    </p>
                    <br>
                    <p><img class="btn-down-nmtn" src="http://goodjudgment.com/bin/arrow-down-white.png" alt="" width="80px"></p>
                </div>
            </div>
        </div>
    </section>

    <!--END Habitacion simple list-->
    <div class="box" style="margin-top:0px; background-color:#e9ebee; padding-top:100px;padding-bottom:70px; margin-bottom:0px">
      <div class="wrapper">
        <div class="container">
            <div class="row">
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                      <img class="card-img-top img-responsive" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Habitación Simple</h4>
                        <p class="card-text"><small class="text-muted">S/. 30.00 Soles </small><span class="label label-success">Nueva Oferta</span></p>
                        <p class="card-text">
                            Ducha Propia
                            <br>
                            Tres Camas
                            <br>
                            Servicio Habitación
                            <br>
                        </p>
                        <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver detalles de Habitación Simple">
                            <?php echo $buttonText; ?>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                      <img class="card-img-top img-responsive" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Habitación Doble</h4>
                        <p class="card-text"><small class="text-muted">S/. 30.00 Soles </small><span class="label label-success">Nueva Oferta</span></p>
                        <p class="card-text">
                            Ducha Propia
                            <br>
                            Tres Camas
                            <br>
                            Servicio Habitación
                            <br>
                        </p>
                        <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver detalles de Habitación Doble">
                            <?php echo $buttonText; ?>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                      <img class="card-img-top img-responsive" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Habitación Triple</h4>
                        <p class="card-text"><small class="text-muted">S/. 30.00 Soles </small><span class="label label-warning">Quedan 2 días</span></p>
                        <p class="card-text">
                            Ducha Propia
                            <br>
                            Tres Camas
                            <br>
                            Servicio Habitación
                            <br>
                        </p>
                        <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver detalles de Habitación Triple">
                            <?php echo $buttonText; ?>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                      <img class="card-img-top img-responsive" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Matrimonial</h4>
                        <p class="card-text"><small class="text-muted">S/. 30.00 Soles</small></p>
                        <p class="card-text">
                            Ducha Propia
                            <br>
                            Tres Camas
                            <br>
                            Servicio Habitación
                            <br>
                        </p>
                        <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver detalles de habitacion Matrimonial">
                            <?php echo $buttonText; ?>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
          <a href="habitaciones.php" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver más habitaciones" style="margin-top:20px">
              Saber Más
          </a>
      </div>
    </div>

    <!--Nuestros servicios diagonal-->
    <div class="box" style="background-color:#475e88; padding-top:100px; padding-bottom:100px; margin-top:0px">
      <div class="wrapper">
        <h1 class="titlediv" style="text-align:center; color:white">
          <strong>Nuestros Servicios</strong>
        </h1>
        <div class="" style="border-bottom: solid 1px white; width:40%"></div>
        <br>
        <p class="text-aside" style="width:50%; min-width:250px;color:white; margin: 0 auto">
            Hospedaje America cuenta con los siguientes servicios a disposición de nuestra clientela, siempre buscando mejorar nuestros servicios con la finalidad de dar a nuestra clientela el mejor trato posible.
        </p>
        <div style="margin-top:50px">
          <img class="btn-down-nmtn" src="http://goodjudgment.com/bin/arrow-down-white.png" alt="" width="80px">
        </div>
      </div>
    </div>
    <div class="box" style="margin-top:0px; background-color:#e9ebee; padding-top:70px;padding-bottom:100px; ">
      <div class="wrapper">
        <p>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="color: gray; margin-top: 15px">
                          <div class="card">
                            <img class="card-img-top img-responsive" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text">Internet/WiFi
                              </p>
                            </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="color: gray; margin-top: 15px">
                          <div class="card">
                            <img class="card-img-top img-responsive" src="http://d243u7pon29hni.cloudfront.net/images/products/tv_led_samsung_48j5200_2_ad_l.jpg" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text">TV/Cable
                              </p>
                            </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="color: gray; margin-top: 15px">
                          <div class="card">
                            <img class="card-img-top img-responsive" src="img/shower2.JPG" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text">Ducha Caliente
                              </p>
                            </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="color: gray; margin-top: 15px">
                          <div class="card">
                            <img class="card-img-top img-responsive" src="img/resized-afternoon-tea-panel-1412071221.jpg" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text">Desayuno
                              </p>
                            </div>
                          </div>
                      </div>
                  </div>
                    <a href="servicios.php" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Ver más servicios" style="margin-top:20px">
                        Saber Más
                    </a>
              </div>
          </div>
        </p>
      </div>
    </div>
    <!--END Nuestros servicios diagonal-->
<?php include('footer.php'); ?>