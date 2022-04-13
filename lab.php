<!DOCTYPE html>
<html class="no-js" lang="es">
	
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<b>TABLA DE MULTIPLICAR</b>
	<table border="1">
	<?php
	define("N", 20);
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
	echo '<table border="1">';
	echo ("<tr>");
	echo ("<th></th>");
	for ($cabecera = 1; $cabecera <= N; $cabecera++) {
		echo ("<th>"); 
		echo $cabecera;
		echo ("</th>"); 
	}
	echo ("</tr>\n");

	for ($x = 1;$x <= N; $x++ ) {
		echo ("<tr>");
		echo ("<th>"); 
		echo $x;
		echo ("</th>"); 
		for ($y = 1;$y <= N; $y++ ) {
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
