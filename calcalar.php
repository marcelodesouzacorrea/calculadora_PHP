<?php
	
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$operacao = $_POST['tipo'];
	

	if (is_numeric($valor1) && is_numeric($valor2)) {
		switch ($operacao) {
		case 'Somar':
			$resultado = $valor1 + $valor2;
			break;
		case 'Subtrair':
			$resultado = $valor1 - $valor2;
			break;
		case 'Multiplicar':
			$resultado = $valor1 * $valor2;
			break;
		case 'Dividir':
			$resultado = $valor1 / $valor2;
			break;
		}
		
		echo $resultado;
	}else{
		echo "Faltou digitar um numero";
	}
	

		

?>