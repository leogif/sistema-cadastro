<?php
	include_once("conn.php");
	include_once('header.html');

	$nome = $_REQUEST['nome'];
	$telefone = $_REQUEST['telefone'];
	$sexo = $_REQUEST['sexo'];

	$sql = "INSERT INTO cliente VALUES ('$nome', '$telefone','$sexo')"; 
	mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
	mysqli_close($conn);
	echo "<h1>Cliente cadastrado com sucesso!</h1>";
	
	echo "<a href='index.html'>Clique aqui para realizar um novo cadastro</a><br><br/>";
	echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
	echo "<br/>";
	echo "<a href='index.html'>Página Inicial</a>";

?>