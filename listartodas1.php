<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "av1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Falha de conecxão: " . $conn->connect_error);
}
?>

<table>
  <tr>
    <th>Código: </th>
    <th>Nome: </th>
    <th>Período: </th>
    <th>Crédito: </th>
  </tr>	
 <?php
  
	$sql = "SELECT codigo, nome, periodo, credito FROM disciplina"; 
	$resultado = $conn->query($sql);
	
	if ($resultado->num_rows > 0) {

		while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $linha["codigo"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["periodo"] . "</td>";
            echo "<td>" . $linha["credito"] . "</td>";
            echo "</tr>";
		}

	} else {
		echo "Não há disciplinas cadastradas !";
	}	
	$conn->close();
?>
</table>
