<?php

$salario = $_POST['salario'];
$valor = $_POST['apurado'];

function calcular($salario, $valor) {
    $comissao = $valor * 0.04;
    $salarioFinal = $salario + $comissao;
    echo "A comissão foi de ".$comissao." e o salário final de ".$salarioFinal;
}

calcular($salario, $valor);

?>
