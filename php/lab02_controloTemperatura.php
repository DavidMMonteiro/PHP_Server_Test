<?php
	$default_txt = "No data";
	$valor_temperatura = file_get_contents("../files/temperatura/valor.txt");
	$update_date = file_get_contents("../files/temperatura/hora.txt");
	$valor_temperatura = $valor_temperatura == ""? $default_txt:$valor_temperatura;
	$update_date = $update_date == ""? $default_txt:$update_date;
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
		<?php
			$state = isset($valor_temperatura, $update_date) && ($valor_temperatura != $default_txt && $update_date != $default_txt)? "on" : "off";
			echo "<img src='../img/led-".$state.".png' title='Led State: ".$state."'>"
		?>
		<h3>Data atualização do LED:</h3>
		<p><?php echo $update_date?></p>
	</body>
	<footer><a href="../index.html" >Página inicial</a></footer>
</html>
