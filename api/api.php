<?php
	header('Content-Type: text/html; charset=utf-8');
	$type = $_SERVER["REQUEST_METHOD"];
	if($type == "POST") {
		 echo "Recebido um POST\n";
		 print_r($_POST);
		 echo file_put_contents("../files/".$_POST["nome"]."/nome.txt",$_POST["nome"]);
		 echo file_put_contents("../".$_POST["nome"]."valor.txt",$_POST["valor"]);
		 echo file_put_contents("../".$_POST["nome"]."hora.txt",$_POST["hora"]);
	} else if ($type == "GET") {
		 echo "Recebido um GET";
	} else {
		 echo "Metodo não permitido";
	}
 ?>