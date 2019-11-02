<!DOCTYPE html>
<html>

<head>
	<meta name="description" content="Ong criada com o propósito de ">
	<meta name="keywords" content="ecocerrado, ong, cerrado, ação social, escola, projeto educacional">
	<meta name="author" content="EcoCerrado">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imgs/logo-ecocerrado.png">
	<meta charset="utf-8">
	<title>Ecocerrado</title>
	<link rel="shortcut icon" href="img/logo-ecocerrado.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/contato.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Satisfy&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<!-- Navbar -->
		<div class="row">
			<div id="logo" class="col-md-4 d-none d-sm-block">
				<img src="assets/imgs/logo.png" width="100" height="120" class="d-inline-block align-top"
					alt="EcoCerrado">
			</div>
			<div class="row d-block d-sm-none">
                <div class="container-mobile">
                <img src="assets/imgs/logo.png" width="60" height="120" class="img-fluid"
					alt="EcoCerrado">
                <a class="mobile-nav" href="index.php">Início</a>
                <a class="mobile-nav" href="sobre.php">Sobre Nós</a>
				</div>
			</div>
			<div id="menu_container" class="col-md-8">
				<nav class="menu d-none d-sm-block">
					<ul class="nav nav-pills">
						<li class="nav-item">
							<a class="botoes nav-link" href="index.php">Início</a>
						</li>
						<li class="nav-item">
							<a class="botoes nav-link" href="sobre.php">Sobre Nós</a>
						</li>
						<li class="nav-item">
							<a class="botoes nav-link" href="contato.php">Contato</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- titulo -->
		<div class="titulo row">
			<h2 class="col-md-12 text-center">Faça Parte!</h2>
			<p class="col-md-12 text-center font-weight-bold">Quer ajudar a ONG EcoCerrado? Fale com a gente!</p>
		</div>

		<!-- Início formulário -->
		<div>
			<form action="mail/contatoemail.php" method="post" class="formulario">
				<div class="form-group">
					<input type="text" name="txtNome" class="form-control" id="txtNome" placeholder="Nome">
				</div>
				<div class="form-group">
					<input type="tel" name="txtTelefone" class="form-control"id="txtTelefone"  placeholder="Telefone">
				</div>
				<div class="form-group">
					<input type="email" name="txtEmail" class="form-control" id="txtEmail" placeholder="E-mail">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="3" placeholder="Escreva sua mensagem"></textarea>
				</div>
				<button type="submit" name="Enviar" class="btn btn-success btn-small btn-lg">Enviar</button>
			</form>
		</div>
	</div>

	<!-- inicio footer -->
	<?php require 'includes/footer.php'; ?>
</body>

</html>