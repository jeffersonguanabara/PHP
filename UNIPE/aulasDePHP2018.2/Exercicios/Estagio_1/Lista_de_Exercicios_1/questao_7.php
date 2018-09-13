<?php

  $base = $_GET['base'];
  $altura = $_GET['altura'];

  $area_do_triangulo = ($base * $altura) / 2;

  echo "A área do triangulo de base ".$base." e altura ".$altura." é de: ".$area_do_triangulo;
?>
