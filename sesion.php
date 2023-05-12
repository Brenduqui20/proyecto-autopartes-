<?php include('encabezado.php');?>
<!-- Testimonial -->
<div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h1>Iniciar Sesión</h1>
                  </div>
               </div>
            </div>

            <form class="form-horizontal"  method="post" action="">

                {{csrf_field()}}

              <fieldset>
                     <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" type="text" placeholder="Your Name *" required class="form-control">
                            </div>
                     </div> 
                            <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" type="password" placeholder="Contraseña *" required class="form-control">
                            </div>
                        </div> 
                                <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Iniciar</button>
                            </div>
                        </div>
            </fieldset>         


            </form>

            </div>
            <?php include('pie.php');?>