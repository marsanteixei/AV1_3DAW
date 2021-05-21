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
				<h1>Disciplinas Cadastradas com Pre Requisito: </h1>
				<br>
				     <?php
                                         include "listar2.php";
                                      ?>
				   <br><br><br><br><br>
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
