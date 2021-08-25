<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UGEL12-CANTA-SOBRENOSOTROS</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/ugel.css" rel="stylesheet">

<!---------------- Publicidad ------------>
  <script src="assets/js/js-Publicidad/modernizr.js" type="text/javascript"></script>
 

    <!---------------- ACCESOS DIRECTOS ------------>
    <link rel="stylesheet" href="assets/css/accesosDirectos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
     <!---------------- ACCESOS DIRECTOS ------------>

      <!---------------- FOOTER ------------>
      <link rel="stylesheet" href="assets/css/footer.css">

       <!-- Iconos-->
  <script src="https://kit.fontawesome.com/1744f21708.js" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: eBusiness - v2.1.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>UGEL</span>12</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="drop-down"><a href="index.php" class="icon-home">UGEL12</a>
            <ul>
              <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
              <li><a href="InstitucionEducativas.php">Instituciones Educativas</a></li>
              <li><a href="directorio.html">Direcctorio</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="" class="icon-cog-alt"> ESTRUCTURA ORGANICA</a>
            <ul>
              <li><a href="direccion.html">Direccion</a></li>
              <li class="drop-down"><a href="apoyo.html">Apoyo</a>
                <ul>
                  <li><a href="apoyo.html">Area de administracion</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="control.html">Control</a>
                <ul>
                  <li><a href="control.html">Control Interno</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="gestionInstitucional.html">Gestion</a>
                <ul>
                  <li><a href="gestionInstitucional.html">Gestion Institucional</a></li>
                  <li><a href="gestionPedagogica.html">Gestion Pedagogica</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li class="drop-down"><a href="guiaTramite.html" class="icon-handshake-o">   SERVICIO INSTITUCIONALES</a>
            <ul>
              <li><a href="guiaTramite.html" > Guia de tramite</a></li>
              <li><a href="informacionTramite.html" > Informacion Tramite</a></li>          
              <li><a href="libroreclamos.html" > Libro de Reclamaciones</a></li>          

            </ul>
          </li>
          <li><a href="ciudadano.html" class="icon-users">CIUDADANO</a></li>

        </ul>
        
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



  <main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- ======= Departments Section ======= -->
    <div class="contenedor-grid">
      <div class="columna1">
    <nav class="lista-menu">
      <ul><li><a href="sobreNosotros.php">Sobre Nosotros</a></li></ul>
      <ul><li><a href="InstitucionEducativas.php">Instituciones Educativas</a></li></ul>
      <ul><li><a href="directorio.html">Directivos</a></li></ul>
    </nav>
      </div>
      <div class="columna2">

        <div class="container">
          <div class="wrapper">
  
              <ul id="sb-slider" class="sb-slider">
              <?php
                      include_once "db_ugel.php";
                      $con=mysqli_connect($host,$user,$pass,$db);
                      $query="SELECT 
                      c.id,
                      c.titulo,
                      c.descripcion,
                      f.web_path
                      FROM
                      convocatorias AS c
                      INNER JOIN convocatorias_files AS cf ON cf.convocatorias_id=c.id
                      INNER JOIN files AS f ON f.id=cf.file_id
                      GROUP BY c.id";
                      $res=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($res)){
                    ?>
                  <li>
                      <a href="#" target="_blank"><img src="<?php echo $row['web_path']?>" alt="image1" /></a>
                  </li>
                  <?php
                        }
                    ?>
              </ul>
  
              <div id="nav-arrows" class="nav-arrows">
                  <a href="#">Next</a>
                  <a href="#">Previous</a>
              </div>
  
          </div>
      </div>

      </div>
      
      <div class="contenido">
        
        <h3 class="nosotros-titulo">Sobre Nosotros</h3>
        <span class="linea"></span>
       <div class="contenido-principal">

          <div class="contenido-one">
          <?php
                      $query="SELECT 
                      v.id,
                      v.titulo,
                      v.descripcion,
                      f.web_path
                      FROM
                      vision AS v
                      INNER JOIN vision_files AS vf ON vf.vision_id=v.id
                      INNER JOIN files AS f ON f.id=vf.file_id
                      GROUP BY v.id";
                      $res=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($res)){
                    ?>
               <div class="img-contenido">
                  <img src="<?php echo $row['web_path']?>" alt="Imgane sobre la vision">
               </div>

               <div class="texto-contenido">
                  <h3><?php echo $row['titulo']?></h3>
                  <p><?php echo $row['descripcion']?></p>
               </div>
               <?php
                        }
                    ?>
         </div>

      <div class="contenido-two">
      <?php                      
                      $query="SELECT 
                      sn.id,
                      sn.titulo,
                      sn.descripcion,
                      f.web_path
                      FROM
                      sobrenosotros AS sn
                      INNER JOIN sobrenosotros_files AS snf ON snf.sobrenosotros_id=sn.id
                      INNER JOIN files AS f ON f.id=snf.file_id
                      GROUP BY sn.id";
                      $res=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($res)){
                    ?>
          <div class="texto-contenido">
             <h3><?php echo $row['titulo']?></h3>
             <p><?php echo $row['descripcion']?></p>
          </div>

          <div class="img-contenido">
            <img src="<?php echo $row['web_path']?>" alt="Imgane sobre la vision">
         </div>

      </div>
      <?php
                        }
                    ?>

       </div>
      </div>

      
    
    </div>
    <!-- End Departments Section -->
    <br>
    <br>

  </main><!-- End #main -->
   <!---------------Accesos Directos ----------->

   <div class="accesos-directos">

    <div class="contenedor-accesos">

      <h3>Accesos Directos</h3>

        <div class="logo-slider">
      <!-- Logo size 400*200-->
            <div class="item">
              <a href="http://www.siseve.pe/web/" target="_blank">
                <img src="assets/img/imgAccesoDirecto/siseve.jpg" alt="Acceso Directo">
              </a>
            </div>
            <div class="item">
              <a href="https://www.transparencia.gob.pe/" target="_blank">
                <img src="assets/img/imgAccesoDirecto/transparencia.jpg" alt="Acceso Directo">
              </a>
            </div>
            <div class="item">
              <a href="http://escale.minedu.gob.pe/" target="_blank">
                <img src="assets/img/imgAccesoDirecto/escale.jpg" alt="Acceso Directo">
              </a>
            </div>
            <div class="item">
              <a href="http://sisgedo.regionayacucho.gob.pe/app/main.php" target="_blank">
                <img src="assets/img/imgAccesoDirecto/SISGEDO.jpg" alt="Acceso Directo"></a>
            </div>
            <div class="item">
              <a href="https://www.pronabec.gob.pe/beca18/" target="_blank">
                <img src="assets/img/imgAccesoDirecto/beca18.jpg" alt="Acceso Directo">
              </a>
            </div>
            <div class="item">
              <a href="http://consultaestadotramite.cultura.gob.pe/" target="_blank">
                <img src="assets/img/imgAccesoDirecto/consulta.jpg" alt="Acceso Directo">
              </a>
            </div>
       </div>
  </div>

  </div>

   <!---------------Accesos Directos ----------->
   <div class="contenedor-redes">
    <input type="checkbox" id="btn-mas">
  
        <div class="redes">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fas fa-envelope-open"></a>
        </div>

        <div class="btn-mas">
          <label for="btn-mas" class="icon-mas2">
            <i class="fas fa-share-alt"></i></label>
      </div>

</div>

 <!---------------FOOTER-----------------------> 
<!---------------FOOTER-----------------------> 
<footer>
       
  <div class="contenedor-footer-all">
   
     <div class="container-cuerpo">

       <div class="colum1-footer">
         <h3>Informacion</h3>

         <ul>
           <li><a href="#">Jr. Los Ángeles s/n <br>
            Urb. Jesús Poderoso Pamplona Baja <br>
            San Juan de Miraflores, Lima - Perú</a></li>
         </ul>
         <ul>
          <li><a href="#">Central Telefónica: 948133907</a></li>
        </ul>
        <ul>
          <li><a href="#">Correo: informaciones@ugel12.gob.pe
          </a></li>
        </ul>
       </div>

       <div class="colum2-footer">

         <h3>Redes Sociales - Ugel Canta</h3>

         <div class="row-footer">
           <a href="https://es-la.facebook.com/UGEL-12-CANTA-1846583118975580/" target="_back"><img src="assets/img/img footer/facebook.png"></a>
           <label>Siguenos en Facebook</label>
         </div>
         <div class="row-footer">
           <a href="https://www.youtube.com/watch?v=uRd56Y__q5o" target="_back"><img src="assets/img/imf footer/youtube.jpg"></a>
           <label>Siguenos en Youtube</label>
         </div>

       </div>

       <div class="colum3-footer">

         <h3>Coronavirus</h3>

         <div class="row2">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/UyvMch68rt8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
         </div>


       </div>

     </div>
   
   </div>
   
   <div class="container-footer">
      <div class="footer">
         <div class="copyright">
          Copyright ©2020 | Todos los Derechos Reservados
         </div>

         <div class="information">
           <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
         </div>
       </div>

     </div>
   
 </footer><!-- End  Footer -->
  <!----------------------Redes Sociales------------------------------->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>


 
  

   <!-- Vendor JS Files -->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>
   <script src="assets/vendor/appear/jquery.appear.js"></script>
   <script src="assets/vendor/knob/jquery.knob.js"></script>
   <script src="assets/vendor/parallax/parallax.js"></script>
   <script src="assets/vendor/wow/wow.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
   <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
   <script src="assets/vendor/venobox/venobox.min.js"></script>
 
   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>

      <!--------------- Publñicidad -------->
      <script src="assets/js/js-Publicidad/jquery.js"></script>
      <script src="assets/js/js-Publicidad/jquery.slicebox.js"></script>
      <script src="assets/js/js-Publicidad/script.js"></script>

      <!--------------------------Acceso directo-------------------------------->

  <script src="assets/js/accesosDirectos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <script>
  $('.logo-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
  </script>
  <!--------------------------Acceso directo-------------------------------->
 

</body>

</html>