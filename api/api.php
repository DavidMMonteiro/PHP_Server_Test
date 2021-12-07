<?php
	header('Content-Type: text/html; charset=utf-8');
	header("Location:http://127.0.0.1/prsi/PHP_Server_Test/index.html");
	$type = $_SERVER["REQUEST_METHOD"];
	if($type == "POST") {
		 echo "Recebido um POST\n";
		 print_r($_POST);
		 if(isset($_POST["valor"], $_POST["hora"])) {
			 echo "Valores aceites. \nGuardando em ficheiros locais.";
			 $nome = $_POST["nome"];
			 $date = str_replace("-","/",$_POST["data"])." ".$_POST["hora"];
			 echo file_put_contents("../files/".$nome."/valor.txt",$_POST["valor"]."º");
			 echo file_put_contents("../files/".$nome."/hora.txt", $date);
			 echo file_put_contents("../files/".$nome."/log.txt", "\n".$date.";".$_POST["valor"]."º",FILE_APPEND);

		 } else {
			 echo "Falta de dados. \nLocal save cancelada.";
		 }
	} else if ($type == "GET") {
		echo "Checking for data"
		 	$data = file_get_contents("../files/".$_GET["nome"]."/log.txt");
			//echo $data
	} else {
		 echo "Metodo não permitido";
	}
	exit();
 ?>