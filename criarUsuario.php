<?php
      include ("./criarUsuario.html");
      if($_POST){
	  $server = "localhost";
	  $user = "root";
	  $password = "";
	  $dataBaseName="av1";
          $conn = mysqli_connect($server,$user,$password,$dataBaseName) or die("connection error: " . $conn->connect_error);
	  $nome =$_POST["nome"];
	  $email =$_POST["email"];
	  $senha=$_POST["senha"];
          $perfil =$_POST["perfil"];
	  $query = mysqli_query($conn,"INSERT INTO usuarios (nome, email,senha, perfil) VALUES ('$nome', '$email','$senha', '$perfil')");
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
