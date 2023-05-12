<?php include('encabezado.php');?>
<!-- Testimonial -->
<div id="testimonial" class="testimonial">
<!--end of contact form -->
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div id="testimonial_slider" class="carousel slide banner-bg" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/logo.jpeg">
                           <div class="container">
                              <div class="carousel-caption relat">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/logo.jpeg">
                           <div class="container">
                              <div class="carousel-caption relat">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/logo.jpeg">
                           <div class="container">
                              <div class="carousel-caption relat">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev"> <i class='fa fa-angle-right'></i></a> <a class="carousel-control-next" href="#testimonial_slider" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a> 
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Contacto</h3>
                     <form class="main_form" action="correo.php" method="post">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Nombre" type="text" name="nombre">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Correo" type="text" name="correo">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Mensaje" type="text" name="mensaje"></textarea>
                           </div>
                           <div class="col-sm-12">
                           <button type="submit" name ="enviar"> ENVIAR</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3803.1623330388347!2d-99.16574758564406!3d17.59502470141576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x85c95999a8017a59%3A0x3577fd1cf2ab70cb!2sAutoaccesorios%20y%20Autopartes%20%22El%20g%C3%BCero%22%2C%20Boulevard%20Eucaria%20Apreza%20km.%2056%20col%2C%20La%20Ci%C3%A9nega%2C%2041100%20Chilapa%20de%20%C3%81lvarez%2C%20Gro.!3m2!1d17.5950317!2d-99.1635579!5e0!3m2!1ses!2smx!4v1626366726790!5m2!1ses!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- end Testimonial --> 
      <?php include('pie.php');?>