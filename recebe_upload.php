<?php
      $server = "localhost";
	  $user = "root";
	  $password = "";
	  $dataBaseName="av1";
      $conn = mysqli_connect($server,$user,$password,$dataBaseName) or die("connection error: " . $conn->connect_error);

?>
<?php
                  include ("./updoc.html");
				  if($_POST){
					 $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
					 $dados = file($arquivo_tmp);
					 foreach($dados as $linha){
						 $linha = trim($linha);
						 $valor = explode(';', $linha);
						 $nome = $valor[0];
	                     $email = $valor[1];
	                     $senha = $valor[2];
	                     $perfil = $valor[3];
						 $query = mysqli_query($conn,"INSERT INTO usuarios (nome, email,senha, perfil) VALUES ('$nome', '$email','$senha', '$perfil')");
					 }
					$_UP['pasta'] = 'uploads/';
                    $_UP['extensao'] = array('csv');
                    $_UP['tamanho'] = 1024 * 1024 * 2;
                    $_UP['renomeia'] = false;
                    $_UP['erros'][0] = 'Não houve erro';
                    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
                    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho';
                    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
                    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
					if ($_FILES['arquivo']['error'] != 0) {
                    die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
                    exit; // Para a execução do script
                    }
					$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
                    if (array_search($extensao, $_UP['extensao']) === false) {
                    echo "envie arquivos com extensão csv";
                    }
					else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
                    echo "envie arquivos de até 2Mb";
                    }
                    else {
                    if ($_UP['renomeia'] == true) {
                    $nome_final = time().'.csv';
					} else {
                    $nome_final = $_FILES['arquivo']['name'];}
					if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
                     echo "Upload efetuado com sucesso!";
                     echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
					 
					 }
					 else { echo "Não foi possível enviar o arquivo, tente novamente";}
                    }
				  }
				?> 