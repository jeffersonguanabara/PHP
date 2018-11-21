<?php

  require "controller/HomeController.php";

  $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

  $crtl = new HomeController();

  switch ($pagina) {
    case "index" :
      $crtl -> Index();
      break;
    case "login" :
      $crtl -> Login();
      break;
    case "painel" :
      $crtl -> Painel();
      break;
  }
?>
