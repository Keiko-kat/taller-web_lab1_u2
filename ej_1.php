<!DOCTYPE html>
<html class="no-js" lang="es">
	
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Lab 1 - U2:</h1>
	</div>
		
	<div class="topnav">
		<a href="index.html">Página principal</a>	
		<a href="ej_1.php">Ejercicio 1</a>
		<a href="ej_2.php">Ejercicio 2</a>
		<a href="ej_3.php">Ejercicio 3</a>
		<a href="ej_4.php">Ejercicio 4</a>
	</div>
	<b>TABLA DE MULTIPLICAR</b>
	<table border="1">
	<?php
	echo ("<tr>");
	echo ("<th></th>");
	for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
		echo ("<th>"); 
		echo $cabecera;
		echo ("</th>"); 
	}
	echo ("</tr>\n");

	for ($x = 1;$x <= 10; $x++ ) {
		echo ("<tr>");
		echo ("<th>"); 
		echo $x;
		echo ("</th>"); 
		for ($y = 1;$y <= 10; $y++ ) {
			$multiplicacion = $x * $y;
			echo ("<td>"); 
			echo ("$multiplicacion");
			echo ("</td>"); 
		}
		echo ("</tr>\n");
	}
	
	?>
	</table>
	</body>
</html>
