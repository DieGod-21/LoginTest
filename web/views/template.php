<?php

$path = TemplateController::path();
?>

<!DCOTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Estructura correcta de un proyecto web" />
    <meta name="author" content=""/>
    <title>Freelance - Start Bootstrap Theme</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>views/assets/img/favicon.png" />
    <!-- Font Awesome (free version)-->
    <script src="https://kit.fontawesome.com/releases/v6.3.0/js/all/js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $path; ?>views/assets/css/styles.css" rel="stylesheet" />
  </head>

  <body id="page-top">

    <div class="wrapper">
      <?php
      include 'modules/nav.php';
      include "modules/header.php";
      include 'pages/portfolio/portfolio.php';
      include 'pages/contact/contact.php';
      include 'modules/footer.php';
      include 'modules/copyright.php';

      ?>
    </div>

    <!-- Bottstrap core js-->
    <script>scr="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"</script>
    <!-- Core theme JS-->
    <script>src="<php echo $path ?>/views/assets/js/scripts.js"</script>
    <!-- SB FORMS JS-->
    <script> src="https://cdn.startbootstrap.com/sb-forms-latest.js"</script>
    
  </body>

