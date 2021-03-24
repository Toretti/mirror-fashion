<?php
$conexao = mysqli_connect ("127.0.0.1", "root", "", "mirrorfashion");
$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
$produto = mysqli_fetch_array($dados);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/produto.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<title><?= $produto['nome'] ?></title>
</head>
<body>
	<?php 
	include("cabecalho.php");
	?>
	<div class="produto-back">
		<div class="container">
			<div class="produto">
				<h1><?= $produto['nome'] ?></h1>
				<p><?= $produto['preco'] ?></p>

				<form action="checkout.php" method="POST">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>

						<input type="radio" name="cor" value="Verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="verde">
						</label>

						<input type="radio" name="cor" value="Rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
						</label>

						<input type="radio" name="cor" value="Azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="azul">
						</label>
					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" min="36" max="46" step="2" name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">40</output>
					</fieldset>

					<input type="submit" class="comprar" value="Comprar">
					<input type="hidden" name="id" value="<?= $produto['id'] ?>">
					<input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
					<input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
				</form>
			</div>

			<div class="detalhes">
				<h2>Detalhes do Produto</h2>

				<p><?= $produto['descricao'] ?></p>

				<table>
					<thead>
						<tr>
							<th>Características</th>
							<th>Detalhes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Camisa Social 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliéster</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Verde, Rosa e Azul</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar à mão</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/produto.js"></script>
	<?php include("rodape.php"); ?>
</body>
</html>