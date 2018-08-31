<?php
	$valor = $_POST['valor'];
	
	if($valor > 0) {
		echo "O número informado é positivo!";
	} else if ($valor == 0) {
		echo "O número informado é igual a zero!";
	} else {
		echo "O número informado é negativo!";
	}
?>
