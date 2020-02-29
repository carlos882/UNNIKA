<?php
include_once 'conexion.php';
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());


$query= "select * from listavehiculos";
$result= pg_exec($cnx,$query);

$cont=pg_numrows($result);

?>

<!DOCTYPE hmtl>
<html>
	<head>

		<title>Mostrar Datos</title>

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

<!-- .site-mobile-menu -->
<style>
 #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>   
	</head>

<body>

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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/fiesta2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Lista de Vehiculos</h1>
          </div>
        </div>
      </div>
    </div>



</center>

		<center><h1>Listado De Vehiculos</h1></center>

	    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">     

	<table  id="customers">
	
		<tr>
				<th>Vehiculo</th>
				<th>Tipo</th>
				<th>Puertas</th>

				
<?php

while ($arr=pg_fetch_array($result)) {
?>	

							<tr>
								<td>
									<?= $arr['vehiculos']?>
								</td>
							
								<td>
									<?= $arr['tipo']?>
								</td>
								<td>
									<?= $arr['puertas']?>
							</td>
						</tr>
						
						</tr>



<?php

}
?>
</div>
 <div class="row align-items-center justify-content-center text-center">
<p><a href="index1.php" class="btn btn-black btn-outline-black py-3 px-5 rounded-0 btn-2">Pagnia Principal</a></p>
</form>


 <div class="row align-items-center justify-content-center text-center">
<p><a href="formulariovehiculos.php" class="btn btn-black btn-outline-black py-3 px-5 rounded-0 btn-2">Atras</a></p>

<div class="row align-items-center justify-content-center text-center">
<p><a href="mostrardatos.php" class="btn btn-black btn-outline-black py-3 px-5 rounded-0 btn-2">Actualizar</a></p>



</form>




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
</table>
</body>
</html>


