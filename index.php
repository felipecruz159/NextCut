<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Agendamento de corte de cabelo ">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">

  <title>NextCut</title>
</head>

<body>


  <?php

  $page = @$_GET['page'];

  if ($page != '') {
    if (file_exists($page . ".php")) {
      if ($page != 'login' && $page != 'cadastro_cliente' && $page != 'cadastro_barbeiro' && $page != 'cadastro_escolha' && $page != 'form_redirect') {
        include 'header.php';
        include 'carousel.php';
        include $page . ".php";
        include 'footer.php';
      }
      else{
        include $page . ".php";
      }
    }
    else {
      include '404.php';
    }
  }
  else {
    include 'header.php';
    include 'carousel.php';
    include 'inicio.php';
    include 'footer.php';
  }

  ?>


  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> <!--framework - vue.js-->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script> <!--consumo de api / node-->
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script> <!--Jquery mask-->
  <script src="js/boots.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  
</body>

</html>