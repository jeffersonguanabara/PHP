<?php

  $nome = $_GET['nome'];
  $disciplina = $_GET['disciplina'];
  $nota_1 = $_GET['nota1'];
  $nota_2 = $_GET['nota2'];
  $nota_3 = $_GET['nota3'];

  function calculaMedia($nota_1, $nota_2, $nota_3) {
    return ($nota_1 + $nota_2 + $nota_3) / 3;
  }

  echo "A média do aluno ".$nome." na disciplina ".$disciplina.", com as notas".
    "N1: ".$nota_1.", N2: ".$nota_2." e N3: ".$nota_3." é ".
    calculaMedia($nota_1, $nota_2, $nota_3);

 ?>
