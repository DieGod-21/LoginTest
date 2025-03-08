<?php
  require_once(__DIR__ . '/../controllers/controller.template.php');
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
      <link rel="icon" type="image/png" href="<?php echo $path; ?>/LOGINTEST/web/views/assets/img/favicon.png" />
      <!-- Font Awesome (free version)-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />

      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
      <!-- core theme CSS (includes Bootstrap)-->
      <link href="<?php echo $path; ?>/LOGINANALYSISSYSTEMS/web/views/assets/css/styles.css" rel="stylesheet" />
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
        include 'pages/login/login.php'

        ?>
      </div>

      <!-- Bottstrap core js-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!-- Core theme JS-->
      <script>src="<php echo $path ?>/views/assets/js/scripts.js"</script>
      <!-- SB FORMS JS-->
      <script> src="https://cdn.startbootstrap.com/sb-forms-latest.js"</script>
      
    </body>

