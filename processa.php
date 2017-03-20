
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//insere a classe Pessoa	
	include_once 'classes/Pessoa.class.php';

	//cria o objeto
	$pessoa = new Pessoa;
	
	//define os atributos
	$pessoa->Genero = $_POST['genero'];
	$pessoa->Cor = $_POST['etnia'];
	$pessoa->Idade = $_POST['idade'];
	$pessoa->Peso = $_POST['peso'];
	$pessoa->Altura = $_POST['altura'];

	//Executa a função para imprimir os atributos
	$pessoa->ImprimeDados();


?>
</body>
</html>
