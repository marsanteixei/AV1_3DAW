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
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="./css/tipo.css">
			<link rel="stylesheet" type="text/css" href="./css/reset.css">
			<title>FAETERJ 3DAW AV1</title>
			
		</head>
		<body>
			<div class="div1">
			
				<div class="div2">
					<img src="img/logo.jpg" class="y" title="Logo">
					<img src="img/selo.jpg" class="c" title="selo">
					<h1 class="titulo">FAETERJ 3DAW AV1</h1>
				</div>
				<ul class="tbt">
					<li class="t"><a href="index.html" class="m">Inicio</a></li>
					<li class="b"><a href="criar.html" class="m">Criar disciplina</a></li>
					<li class="b"><a href="criar2.php" class="m">Adicionar requisito</a></li>
					<li class="b"><a href="alterar.php" class="m">Alterar</a></li>
					<li class="b"><a href="listar.php" class="m">Ver requisito</a></li>
					<li class="b"><a href="listartodas.php" class="m">Listar todas</a></li>
					<li class="b"><a href="procurar.php" class="m">Procurar</a></li>
					<li class="b"><a href="excluir.php" class="m"> Excluir</a></li>
					<li class="b"><a href="criarUsuario.html" class="m">Cadastro</a></li>
				
				</ul>
				<ul>
				<h1>Procurar Disciplina: </h1>
				<br><br>
				<ul>
				<form action="procurar.php" method="post">
	            <label>Código da Disciplina:</label><br><br>
	            <input type="text" name="codigo" placeholder="Digite o código"><br><br>
				<br><br>
	            <button class="botao" name="Procurar">Procurar</button>
				<?php
				if($_POST){
					$codigo=$_POST["codigo"];
					$sql1 = "SELECT * FROM disciplina WHERE codigo='$codigo'";
					$resultado = $conn->query($sql1);
	            if ($resultado->num_rows > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<br><br><br>";
                    echo "Código : ".$linha["codigo"]. "<br><br><br>";
					echo "Nome : ".$linha["nome"]. "<br><br><br>";
					echo "Período : ".$linha["periodo"]. "<br><br><br>";
                    echo "Credito : ".$linha["credito"]. "<br><br><br>";
					}

	            }
				 else {
					   echo "<br><br><br>";
		               echo "Não há disciplina cadastradas com esse código !";
	                }	
	                $conn->close();
				    }
				?>
                </form>
				   <br><br><br><br><br>
				</ul>
				</ul>
					
				</div>
				
				<div class="div3">
						<footer>
							<b>Av1 de 3daw  Aluno : Márcio dos Santos Teixeira</b>
							<br><br>
							<b> FAETERJ - Faculdade de Educação Tecnlogica do Estado do Rio de janeiro</b>
						</footer>
				</div>
				
			</div>
	
		</body>
</html>	