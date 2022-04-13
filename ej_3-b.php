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
	
	$metodo = $_SERVER["REQUEST_METHOD"];
	$cad_consulta = $_SERVER['QUERY_STRING'];
	$flag = TRUE;
	
	$N = $_GET['N'];
	$color_1 = $_GET['Color_a'];
	$color_2 = $_GET['Color_b'];
	echo ("<tr>");
	echo ("<th></th>");
	for ($cabecera = 1; $cabecera <= $N; $cabecera++) {
		echo ("<th>"); 
		echo $cabecera;
		echo ("</th>"); 
	}
	echo ("</tr>\n");

	for ($x = 1;$x <= $N; $x++ ) {
		if($flag){
			echo ("<tr style='background-color:$color_1;'>");
			$flag = false;
		}else{
			echo ("<tr style='background-color:$color_2;'>");
			$flag = true;
		}
		echo ("<th>"); 
		echo $x;
		echo ("</th>"); 
		for ($y = 1;$y <= $N; $y++ ) {
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
