<?php
	$valor_temperatura = file_get_contents("../files/temperatura/valor.txt");
	$update_date = file_get_contents("../files/temperatura/hora.txt");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="15">
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</head>
	<body>
		<h1>Lab02 - Controlo de Temperatura</h1>
		<h3>Temperatura Atual:</h3>
		<p><?php echo $valor_temperatura?></p>
		<h3>Data atualização de Temperatura:</h3>
		<p><?php echo $update_date?></p>
		<h3>Estado de LED</h3>
		<img src="../img/led-off.png">
		<h3>Data atualização do LED:</h3>
		<p><?php echo $update_date?></p>
	</body>
	<footer><a href="../index.html" >Página inicial</a></footer>
</html>
