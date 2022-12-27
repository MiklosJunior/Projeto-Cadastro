<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$sql = "insert into usuarios (nome,email,idade) values ('$nome','$email','$idade')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Sistema de Cadastro</title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
					<a href="#"><li>Voltar ao Site</li></a>
				<br><br><br>
				<img class="imagem" src="image/logo.png">
				
				</ul>
			</nav>
			
			<section class="cadas">
			<h1>Confirmação de Cadastro</h1>
			<hr><br><br>
			
			<?php
			If($linhas == 1) {
				print "<h2>Cadastro efetuado com sucesso!</h2><br>
			Muito obrigado por se cadastrar no nosso site, tenha um otimo aproveito :)
			<br>";
			}else {
				print "<h2>Cadastro NÃO efetuado.</h2><br> <h3>Já existe um usuário com este e-mail!</h3> 
				<br><h4> Por favor tente novamente com outro e-mail :)</h4>";
			}
			?>
			
			</section>
		</div>
	</body>
</html>