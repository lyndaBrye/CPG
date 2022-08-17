<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cliniquedupontdegaulle.ci</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/clinique.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">
</head>
<body>
  
  <!-- end topbar -->
  <?php
  include 'header.php';
  ?>

  
  <!-- end header -->

  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <br>
            <br>
        </div>
      </div>
    </div>
  </section>

  <section class="section1">
    <div class="container clearfix">
      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
        <div class="general-title text-center">
          <h4>
            <marquee behavior="" direction=""> URGENCES 24h/24             -             7jours/7 </marquee>
            
          </h4>
          <br>
          <br>
        
          <p> Un centre de soins accessibles pour une meilleure prise en charge de votre santé:</p>
          <p>Un personnel de qualité <br> <br>
          Un laboratoire complet <br> <br>
          Un service d'exploration avec des équipements performants
        </p>
          <hr>
        </div>    
        <!-- end col-6 -->
      </div>
    </div>
    <!-- end container -->
  </section>
  
 
  <section class="section1">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-left">
              <a href="index.php" class=""> <i class="active dm-icon fa fa-home fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Accueil</h4>
              <hr>
            </div>           
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-right">
              <a href="services.php" class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Services</h4>
              <hr>
            </div>
          </div>
        </div>
        <!-- servicebox -->
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-bottom">
              <a href="assurances.php" class=""> <i class="active dm-icon fa fa-bookmark fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Assurances médicales</h4>
              <hr>
            </div>
            
          </div>
          <!-- service-icon -->
        </div>
        <!-- servicebox -->
      </div>
      <!-- large-4 -->
      <!-- large-4 -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section -->

  <section class="section5">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-12 columns">
        <div class="widget" data-effect="slide-left">
          <img src="img/pla.jpg" alt="">
        </div>
        <!-- end widget -->
      </div>
      <!-- large-6 -->
      <div class="col-lg-6 col-md-6 col-sm-12 columns">
        <div class="widget" data-effect="slide-left">
          <p>
          <p>La clinique du Pont de Gaulle se situe à Treichville avenue 1, près du siège CIE - SODECI et le palais de la culture. L’entrée dans la clinique s’effectue par le rez-de-chaussée du bâtiment E au sein de la Cité SIPIM. 

<br> L'Accueil se situe au 2e étage <br>

La Clinique du pont de Gaulle dispose de :
<br>

1 unité d'olphtalmologie
<br>
1 bloc opératoire
<br>
2 salles d'accouchement
<br>
1 salle de couveuses
<br>
1 laboratoire d’analyses médicales
<br>
1 unité d'imagerie (radiologie)
<br>
1 salle de mécanothérapie
<br>
1 salle de physiothérapie  
<br>
Le personnel à votre disposition:
<br>

Médecins ,

Cardiologue,

Ophtalmologues
,
Gynécologues-Obstétriciens
,
Infirmières Puéricultrices
,
Sages-femmes
,
Infirmiers diplômés d’État
,
Aides-soignantes
,
Agents de service hospitalier
,
Brancardiers    </p>
          
        </div>
        <!-- end widget -->
      </div>
      <!-- large-6 -->
    </div>
    


    
    <!-- end container -->
  </section>
  <!-- end section2 -->

  <section class="section4 text-center">
    <div class="general-title">
      <h3>GALERIE
        <?php
        include 'album1.php';
        ?>
      </h3>
      <hr>
    </div>
    
    <!-- end portfolio-wrapper -->
    <a class="button large" href="album.php">Plus</a>
  </section>
  <!-- end section1 -->

  
  <!-- end section2 -->
  
  <!-- end section3 -->

  <?php
  include 'map.php';
  include 'footer.php';
  ?>
  <!-- end footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
