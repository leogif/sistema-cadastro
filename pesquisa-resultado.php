<?php 
	// CONECTANDO AO BANCO DE DADOS:
	require("conn.php");

	// RECEBENDO OS DADOS A PESQUISAR
	$pesquisa = $_REQUEST["sexo"];
	echo "<link rel='stylesheet' href='css/busca.css'>";
	echo "<table border='1' style='width:50%'>";
	echo "<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>";
	echo "<link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,500' rel='stylesheet'>";
	echo "<tr>";
	echo "<th>NOME</th>";
	echo "<th>TELEFONE</th>";			
	echo "<th>SEXO</th>";			
	echo "</tr>";
	//PREENCHENDO A TABELA COM OS DADOS DO DB: -->
	$sql = "SELECT * FROM cliente WHERE sexo = '$pesquisa'";
	$resultado = mysqli_query($conn, $sql) or die ('Erro ao retornar dados');
	// OBTENDO OS DADOS POR MEIO DE UM LOOP WHILE
	while($registro = mysqli_fetch_array($resultado)){
		$nome = $registro['nome'];
		$telefone = $registro['telefone'];
		$sexo = $registro['sexo'];
		echo "<tr>";
		echo "<td>".$nome."</td>";
		echo "<td>".$telefone."</td>";
		echo "<td>".$sexo."</td>";
		echo "</tr>";
	}
	mysqli_close($conn);
	echo "</table>";
?>
</body>
</html>