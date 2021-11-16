<?php
	header('Content-Type: text/html; charset=utf-8');
	$type = $_SERVER["REQUEST_METHOD"];
	if(type == "POST") {
		 echo "Recebido um POST";
		 print_r($_POST);
	} else if (type == "GET") {
		 echo "Recebido um GET";
	} else {
		 echo "Metodo não permitido";
	}
 ?>