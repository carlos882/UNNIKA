 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inserta tus vehiculos</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>


  <div class="site-loader"></div>
 
    
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
               <a href="index1.php" class="text-white h2 mb-0"><img src="ford.png" alt="Logotipo de Ford" width="200" height="100" /></a><span class="text-danger">
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index1.php">Inicio</a>
                  </li>
                    <li><a href="formulariovehiculos.php">Intro Vehiculos</a></li>
                  <li class="has-children">
                    <a >Listado Vehículos</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="mostrardatos.php">Listado</a></li>
                        
                    </ul>
                  </li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="laempresa.php">La Empresa</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/fiesta3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Tus Vehículos</h1>
          </div>
        </div>
      </div>
    </div>


       <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Inserta Vehículos</h2>
            </div>
           
          </div>
        </div>



  
 <div class="site-section">	
      <div class="container">
        <div class="row justify-content-center">
            <div class="site-section-title">

<?php
include_once 'conexion.php';
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
//echo "Conexion exitosa<br>";


if ( $_POST ) {
  $result = pg_query($cnx, "INSERT INTO listavehiculos (vehiculos,tipo,puertas) VALUES ('". pg_escape_string($_POST['vehiculos']) . "','" . pg_escape_string($_POST['tipo']) . "'," . ((int)$_POST['puertas']) . " )");
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;



  }
}
if ( $_POST )
  echo "<div class=\"info\">Registro Insertado Correctamente
";
?>
	 
<form action="" method="post">
	
<label><b>Vehiculo</b></label>
<input type="text" name="vehiculos" value="" class="txtbox long"/>
<label><b>Tipo</b></label>
<input type="text" name="tipo" value="" class="txtbox long"/>
<label><b>Puertas</b></label>

<input type="text" name="puertas" value="" class="txtbox"/>


<br />
<br />
  <div class="row">

<button style="margin: 10px"> <input type="submit" value="Guardar" class="btn"/> </button>

<button style="margin: 10px">  <input type="reset" value="Limpiar" class="btn" /> </button>
</div>
 
 <div class="row align-items-center justify-content-center text-center">
<p><a href="index1.php" class="btn btn-black btn-outline-black py-3 px-5 rounded-0 btn-2">Volver</a></p>

	
 <div class="row align-items-center justify-content-center text-center">
<p><a href="mostrardatos.php" class="btn btn-black btn-outline-black py-3 px-5 rounded-0 btn-2">Ver listado</a></p>

</form>
 
  
 <div class="site-section">
 	</div>
 	</div>
 	</div>
 	</div>
 	</div>

 	</div>
 	 	</div>

 	</div>

    </form>


   <?php

// esta parte es el pie de pagina 
   ?>

    

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">FORD</h3>
              <p>Siempre dando lo mejor para los exigentes y dando rendimiento para los rudos con alma de motor</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">CITIOS</h3> 
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index1.php">Incio</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="laempresa.php">La Empresa</a></li>
                  <li><a href="contacto.php">Contacto</a></li>  
                </ul>
              </div>
              
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
             <h3 class="footer-heading mb-4">NUESTRAS REDES</h3>

                <div>
                  <a href="https://www.facebook.com/ford" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/ford" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/ford/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
             <!-- TITULO PIE DE PAGINA -->
            &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Ford Motor Company <i class="icon-heart text-danger" aria-hidden="true"></i> 
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>



</table>
</body>
</html>
