<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Minha calculadora em PHP</title>
	
</head>
<body>
	<div class="container">
	
      <form method="post" action="calcalar.php">
		
	
		valor1:<input type="text" name="valor1" size="5"><br>
	
		valor2:<input type="text" name="valor2" size="5"><br>
	
		
		<select name="tipo">
		<option selected="selected">Somar</option>	
		<option selected="selected">Subtrair</option>
		<option selected="selected">Multiplicar</option>
		<option selected="selected">Dividir</option>
		</select>
	
		<button type="submit">Calcular</button>


	</form>
	</div>	
	
</body>
</html>