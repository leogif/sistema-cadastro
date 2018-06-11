<?php
 // Conectando ao banco de dados:
 include_once("conn.php");
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['sexo'];
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>NOME</th>
 <th>TELEFONE</th>
 <th>SEXO</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM cadastro WHERE Sexo = '$pesquisa'";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['nome'];
   $sobrenome = $registro['telefone'];
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