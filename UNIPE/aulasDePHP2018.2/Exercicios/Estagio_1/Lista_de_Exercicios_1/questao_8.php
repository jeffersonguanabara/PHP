<?php

  $anoNascimento = $_GET['anoNascimento'];
  $anoAtual = $_GET['anoAtual'];

  $idade = $anoAtual - $anoNascimento;

  echo "A sua idade é de: ".$idade." anos.";
?>
