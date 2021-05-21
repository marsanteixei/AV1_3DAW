f<?php
	include("./criar2.php");
	if ($_POST) {
		$server = "localhost";
		$user = "root";
		$password = "";
		$dataBaseName = "av1";
		$conn = mysqli_connect($server, $user, $password, $dataBaseName) or die("connection error: " . $conn->connect_error);
		$iddisciplina = $_POST["iddisciplina"];
		$idrequisito = $_POST["idrequisito"];
		$query1 = mysqli_query($conn, "SELECT * FROM disciplina WHERE id= $iddisciplina");
		$query2 =  mysqli_query($conn, "SELECT * FROM requisito WHERE id= $idrequisito");
		$elemento1 = mysqli_fetch_assoc($query1);
		$elemento2 = mysqli_fetch_assoc($query2);

		if ($elemento1[codigo] != $elemento2[codigo] && $elemento1[periodo] > $elemento2[periodo]) {
			$query = mysqli_query($conn, "INSERT INTO disciplinarequisito (iddisciplina, idrequisito) VALUES ($iddisciplina, $idrequisito)");
			if ($query) {
				echo "<br><br>";
				echo "Cadastro efetudado";
			} else {
				echo "<br><br>";
				echo "cadastro não efetuado";
			}
		} else {
			echo "<br><br>";
			echo " selecione disciplinas validas";
		}

		$conn->close();
	}
	?>