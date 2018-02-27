<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Sena</title>

  <!-- Favicons-->
  <link rel="icon" href="images/sena/sena_fondo.png" sizes="32x32">
  <!-- Favicons-->
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->    
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="css/personalized.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- jQuery Library -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  

</head>

<body>
  <!-- Start Page Loading -->


  <!-- End Page Loading -->

  <?php include_once 'tutoriales/pages/header/header.php'?>
  <!-- START HEADER -->

  <!-- END HEADER -->


  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?php include_once 'tutoriales/sidebar/sidebar.php'?>
      <!-- END LEFT SIDEBAR NAV-->



      <!-- START CONTENT -->
      <section id="content">

       <div class="container">


        <div id="profile-card" class="card">
          <div class="card-image waves-effect waves-block waves-light">

            <img class="activator" src="images/sena/intro.jpg" alt="user background">
          </div>
          <div class="card-content">
            <img src="images/sena/sena_black.png" class="circle responsive-img activator card-profile-image">



            <div id="contenido_video" class="separar">

              <?php include_once 'tutoriales/pages/intro/intro.php'?>


            </div>

          </div>

        </div>

      </div>
    </section>


  </div>
  <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- START FOOTER -->
<?php include_once 'pages/footer/footer.php'?>
<!-- END FOOTER -->


</body>

</html>


