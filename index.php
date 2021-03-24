<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet/less" type="text/css" href="less/estilos.less" />
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
</head>
<body>
	<header class="container">
		<h1><a href="index"><img src="img/logo.png" alt="Mirror Fashion"></h1> </a>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>

		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>

			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section> 

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>

		<img src="img/destaque-home.png" alt="Promoção: Big City Night"> 
		
		<a href="#" class="pause"></a> 
		
	</div>

	<div class="container paineis">
		<section class="painel novidades">
			<h2> Novidades </h2>
			<ol>
				<?php
				$conexao = mysqli_connect("127.0.0.1", "root", "", "mirrorfashion");
				$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data desc");
				while ($produto = mysqli_fetch_array($dados)):
				?>
				<li>
				<a href="produto.php?id=<?= $produto['id'] ?> ">
				<figure>
				<img src="img/produtos/miniatura<?= $produto['id'] ?>.png"
				alt="<?= $produto['nome'] ?> ">
				<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
				</figure>
				</a>
				</li>
				<?php endwhile; ?>
			</ol>
			<button type="button">Mostra mais</button> 
		</section>

		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<?php
				$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas desc");
				while ($produto = mysqli_fetch_array($dados)):
				?>
				<li>
				<a href="produto.php?id=<?= $produto['id'] ?> ">
				<figure>
				<img src="img/produtos/miniatura<?= $produto['id'] ?>.png"
				alt="<?= $produto['nome'] ?> ">
				<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
				</figure>
				</a>
				</li>
				<?php endwhile; ?>
			</ol>
			<button type="button">Mostra mais</button>
		</section>
	</div>

	<footer>
		<div class="container">
			<img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
			<ul class="social">
				<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
				<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
				<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
			</ul>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/home.js"></script>
	<script src="js/trocaBanner.js"></script>
	<script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
</body>
</html>
