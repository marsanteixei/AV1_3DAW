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
<?php
 echo "<style>
    table{
		width:520px;
	    height:460px;
		margin-left:450px;
		text-align:center;
		border: 6px ridge blue;
	}
	 
 </style>";
 echo "<table>";
  echo "<tr>
    <th>Código:</th>
    <th>Nome:</th>
    <th>Período:</th>
    <th>Credito:</th>
	 <th>Código Requisito:</th>
  </tr>";
		
	$sql =" SELECT d.codigo AS codigodisciplina, d.nome AS nome, d.periodo AS periodo ,d.credito AS credito, r.codigo AS codigorequisito 
	FROM disciplina d 
	INNER JOIN disciplinarequisito dr 
	ON d.id=dr.iddisciplina 
	INNER JOIN requisito r 
	ON r.id = dr.idrequisito"; 
	$resultado = $conn->query($sql);
	if ($resultado->num_rows > 0) {

		while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
			echo "<td>" . $linha["codigodisciplina"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["periodo"] . "</td>";
            echo "<td>" . $linha["credito"] . "</td>";
			echo "<td>" . $linha["codigorequisito"] . "</td>";
            echo "</tr>";
		}

	} else {
		echo "Não há disciplinas cadastradas !";
	}
echo "</table>";	
$conn->close();
?>

    
