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
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <?php
  include 'header.php';
  ?>
  <!-- end header -->
  

  <section class="section1">
    <div class="container clearfix">
      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">       
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h4 class="title">Nous contacter</h4>
          <div id="message"></div>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Nom et prenoms" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder=" Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder=" Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Message envoyé. Merci!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large btn-primary">Envoyez</button>
            </div>

          </form>
        </div>
        
        
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h4 class="title">Contact(s) </h4>
          <ul class="contact_details">
            <li><i class="fa fa-envelope-o"> </i> lacliniquepontdegaulle@gmail.com</li>
            <li><i class="fa fa-phone-square"> </i> 27 21 24 22 11</li>
            <li><i class="fa fa-home"> </i> 18 BP 59 ABIDJAN 18 - TREICHVILLE AVENUE 1, PALAIS DE LA CULTURE JUSTE APRÈS LE SIÈGE DE LA SODECI
            </li>
          </ul>
          <!-- contact_details -->
        </div>

        <div class="clearfix"></div>
        <div class="divider"></div>

        <h4 class="title">Réseaux sociaux</h4>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="#" class=""> <i class="dm-icon fa fa-facebook fa-3x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Facebook</h4>
              </div>
            </div>
            <!-- service-icon -->
          </div>
          <!-- servicebox -->
        </div>
        <!-- large-3 -->

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="#" class=""> <i class="dm-icon fa fa-twitter fa-3x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Twitter</h4>
              </div>
            </div>
            <!-- service-icon -->
          </div>
          <!-- servicebox -->
        </div>
        <!-- large-3 -->
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="#" class=""> <i class="dm-icon fa fa-instagram fa-3x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>instagram</h4>
              </div>
            </div>
            <!-- service-icon -->
          </div>
          <!-- servicebox -->
        </div>

        
        <!-- large-3 -->

        
        <!-- large-3 -->

      </div>
      <!-- end content -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section -->

  <?php
    include 'map.php';

  include 'footer.php';
  ?>
  <!-- end footer -->
 <!--<div class="dmtop">Scroll to Top</div>-->
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
