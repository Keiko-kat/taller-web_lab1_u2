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
	<h1><b>Imágenes en directorio "img"</b></h1>
	<table border="1">
	<?php
	$files = array_diff(scandir('img/'), array('.', '..'));
	$N = sizeof($files);
	echo ("<tr>");
	
	for ($x = 1;$x <= $N; $x++ ) {
		$y= $x+1;
		echo ("<td>"); 
		echo (" <img src='img/".$files[$y]."' alt='".$files[$y]."' width = 275px> ");
		echo ("</td>"); 
		if ($x % 4 == 0) {
			echo ("</tr>\n");
		}
	}
	?>
	</table>
	</body>
</html>
