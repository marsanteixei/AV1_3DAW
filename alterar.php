<?php
      $server = "localhost";
	  $user = "root";
	  $password = "";
	  $dataBaseName="av1";
          $conn = mysqli_connect($server,$user,$password,$dataBaseName) or die("connection error: " . $conn->connect_error);

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
					<li class="t"><a href="index.html" class="m">Inicial</a></li>
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
				<h1>Alterar Disciplina: </h1>
				<br>
				<form action="alterar.php" method="post">
	                          <label>Código da Disciplina :</label><br><br><br><br>
	                          <input type="text" name="codigo" placeholder="Digite o código da disciplina a ser alterada"><br><br>
				  <label>O que será alterado? :</label><br><br><br><br>
				  <select name="tipo">
                                    <option>codigo</option>
                                    <option>nome</option>
                                    <option>periodo</option>
                                    <option>credito</option>
                                  </select>
				    <br><br>
				<label>A disciplina é pre requisito? :</label><br><br><br><br>
				<select name="resp">
                                  <option>sim</option>
                                  <option>nao</option>
                               </select>
				<br><br>
			      <label>Alteração :</label><br><br><br><br>
	                      <input type="text" name="alteracao" placeholder="Digite a alteração: "><br><br>
	                        <button class="botao" name="alterar">Alterar</button>
				   <?php
				        if($_POST){
					$codigo=$_POST["codigo"];
					$tipo=$_POST["tipo"];
					$resp=$_POST["resp"];
					$alteracao=$_POST["alteracao"];
					if($resp=='sim'){
						switch ($tipo) {
                                                  case 'codigo':
						   $query1 = mysqli_query($conn,"UPDATE disciplina SET codigo ='$alteracao' WHERE codigo ='$codigo'");
						   if($query1){
						   $query2 = mysqli_query($conn,"UPDATE requisito SET codigo ='$alteracao' WHERE codigo ='$codigo'");
						   if($query2){
						   echo "<br><br><br>";
                                                   echo "Alteração realizada";}}
                                                   break;
                                                 case 'nome':
                                                  $query3 = mysqli_query($conn,"UPDATE disciplina SET nome ='$alteracao' WHERE codigo ='$codigo'");
						  if($query3){
						  $query4 = mysqli_query($conn,"UPDATE requisito SET nome ='$alteracao' WHERE codigo ='$codigo'");
						  if($query4){
						  echo "<br><br><br>";
                                                  echo "Alteração realizada";}}
                                                  break;
                                                case 'periodo':
                                                  $query5 = mysqli_query($conn,"UPDATE disciplina SET periodo = $alteracao WHERE codigo ='$codigo'");
						  if($query5){
						  $query6 = mysqli_query($conn,"UPDATE requisito SET periodo = $alteracao WHERE codigo ='$codigo'");
						  if($query6){
						  echo "<br><br><br>";
                                                  echo "Alteração realizada";}}
                                                  break;
                                                default:
                                                  $query7 = mysqli_query($conn,"UPDATE disciplina SET credito = $alteracao WHERE codigo ='$codigo'");
						  if($query7){
						  $query8 = mysqli_query($conn,"UPDATE requisito SET credito = $alteracao WHERE codigo ='$codigo'");
						  if($query8){
						  echo "<br><br><br>";
                                                  echo "Alteração realizada";}}
                                                }
					           }
				                     else{
						       switch ($tipo) {
                                                        case 'codigo':
						         $query9 = mysqli_query($conn,"UPDATE disciplina SET codigo ='$alteracao' WHERE codigo ='$codigo'");
						         if($query9){
						         echo "<br><br><br>";
                                                         echo "Alteração realizada";}
                                                         break;
                                                        case 'nome':
                                                         $query10 = mysqli_query($conn,"UPDATE disciplina SET nome ='$alteracao' WHERE codigo ='$codigo'");
						         if($query10){
						         echo "<br><br><br>";
                                                         echo "Alteração realizada";}
                                                         break;
                                                       case 'periodo':
                                                        $query11 = mysqli_query($conn,"UPDATE disciplina SET periodo = $alteracao WHERE codigo ='$codigo'");
						        if($query11){
						        echo "<br><br><br>";
                                                        echo "Alteração realizada";}
                                                        break;
                                                       default:
                                                        $query12 = mysqli_query($conn,"UPDATE disciplina SET credito = $alteracao WHERE codigo ='$codigo'");
						        if($query12){
						        echo "<br><br><br>";
                                                        echo "Alteração realizada";}
                                                       }
					          }
				             }
				        ?>
                               </form>
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
