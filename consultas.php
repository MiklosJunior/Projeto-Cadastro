<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where idade like '%$filtro%' order by idade";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


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
			
			<section class="cons">
			<h1>Consultas</h1>
			<hr><br>
			
			<form method="GET" action="">
				Filtrar por idade: <input type="text" name="filtro" class="campo" required autofocus>
				<input type="submit" value="Pesquisar" class="btn">
			</form>
			
			<?php
			
			print "Resultado da pesquisa com o número <strong>$filtro</strong><br><br>";
			
			print "$registros Registros Encontrados.";
			
			print "<br><br>";
			
			while($exibirRegistros = mysqli_fetch_array($consulta)){

				$nome = $exibirRegistros[1];
				$email = $exibirRegistros[2];
				$idade = $exibirRegistros[3];
				
				print "<article>";
				

				print "$nome<br>";
				print "$email<br>";
				print "$idade";
				
				print "</article>";
			}
			mysqli_close($conexao);
			?>
			
			</section>
		</div>
	</body>
</html>