<?php

$baseMaior = $_POST['baseMaior'];
$baseMenor = $_POST['baseMenor'];
$altura = $_POST['altura'];

function calculaArea($baseMaior, $baseMenor, $altura) {
    $area = (($baseMaior+$baseMenor) / 2) * $altura;
    echo "A área do trapézio de base maior igual a ".$baseMaior.", de base menor igual a ".$baseMenor." e de altura igual a ".$altura." é de ".$area;
}

calculaArea($baseMaior, $baseMenor, $altura);

?>
