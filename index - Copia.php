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
			<h1>Cadastro de Usuários</h1>
			<hr><br><br>
			
				<form method="post" action="processa.php">
					<input type="submit" value="Salvar" Class="btn">
					<input type="reset" value="Limpar" class="btn">
					<br><br>
				
					Nome<br>
					<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
					Email<br>
					<input type="email" name="email" class="campo" maxlength="50" required><br>
					Idade<br>
					<input type="number" name="idade" class="campo" maxlength="40" required><br>
				</form>
			</section>
		</div>
	</body>
</html>