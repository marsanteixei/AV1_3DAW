<?php
      include ("./criar.html");
      if($_POST){
	  $server = "localhost";
	  $user = "root";
	  $password = "";
	  $dataBaseName="av1";
      $conn = mysqli_connect($server,$user,$password,$dataBaseName) or die("connection error: " . $conn->connect_error);
	  $codigo =$_POST["codigo"];
      $nome =$_POST["nome"];
	  $periodo =$_POST["periodo"];
      $credito =$_POST["credito"];
	  $resposta =$_POST["resposta"];
	  $query = mysqli_query($conn,"INSERT INTO disciplina (codigo, nome, periodo, credito) VALUES ('$codigo', '$nome', '$periodo', '$credito')");
	  if($resposta == 'sim'){
		  $query = mysqli_query($conn,"INSERT INTO requisito (codigo, nome, periodo, credito) VALUES ('$codigo', '$nome', '$periodo', '$credito')");
	  }
	  if($query){
		 echo "<br><br>";
		 echo "Cadastro efetudado"; 
	  }
	  else{
		  echo "<br><br>";
		  echo "cadastro não efetuado";
	  }
	  $conn->close();
    }
?>