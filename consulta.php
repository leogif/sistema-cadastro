<?php
	include_once('conn.php');
	include_once('header.html');

	// Criando tabela e cabeçalho de dados:
	 echo "<table class='table bordered tabela'>";
	 echo "<tr>";
	 echo "<thead>";
	 echo "<th>NOME</th>";
	 echo "<th>TELEFONE</th>";
	 echo "<th>SEXO</th>";
	 echo "</thead>";
	 echo "</tr>";
	  
	 $sql = "SELECT * FROM cliente";
	 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
	 // Obtendo os dados por meio de um loop while
	 while ($registro = mysqli_fetch_array($resultado))
	 {
	    $nome = $registro['nome'];
	    $telefone = $registro['telefone'];
	    $sexo = $registro['sexo'];
	    echo "<tr>";
	    echo "<tbody>";
	    echo "<td>".$nome."</td>";
	    echo "<td>".$telefone."</td>";
	    echo "<td>".$sexo."</td>";
	    echo "</tbody>";
	    echo "</tr>";
	 }
	 mysqli_close($conn);
	 echo "</table>";
	 echo "<br/>";
	 echo "<a class='btn btn-primary btn-lg' href='index.html'>Página Inicial</a>";
?>