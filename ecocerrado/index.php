<?php require 'includes/header.php'; ?>

<body>
	<div class="container-fluid">
		<div class="row">

			<!-- coluna da esquerda -->
			<div id="logo" class="col-md-4">
				<img src="assets/imgs/logo.png" width="100" height="120" class="d-inline-block align-top img-fluid"
					alt="EcoCerrado">
				<h1>EcoCerrado</h1>
				<p>A ONG EcoCerrado atua em escolas, faculdades e outros
					espaços disseminando a educação ambiental através de
					fotografias, exposições e palestras. O foco da ONG é o bioma
					Cerrado, os membros promovem saídas de campo, realizam
					trilhas ecológicas, acampamentos educativos, esportes de
					aventura e resgate de animais silvestres.
					A atual composição é de 35 membros, possui um museu itinerante
					com insetário, fósseis de animais do cerrado, espécies
					de serpentes do cerrado e um acervo fotográfico da sua fauna e
					flora.</p>
				<div class="botoes_logo">
					<a class="bot nav-link border border-success rounded" href="sobre.php">QUEM SOMOS</a>
					<a class="bot nav-link border border-success rounded" href="contato.php">COMO AJUDAR</a>
				</div>
			</div>

			<!-- coluna da direita -->
			<div id="menu_container" class="col-md-8 d-none d-sm-block">
				<nav class="menu">
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

	</div>

	<!-- Início carrosel -->
	<div class="home">
		<h1></h1>
	</div>
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
			<li data-target="#demo" data-slide-to="4"></li>
		</ul>
		<div class="container carousel-inner">
			<div class="carousel-item active">
				<img src="assets/imgs/projeto eco educar.jpeg" class="img-fluid" alt="" width="1200" height="600">
				<div class="carousel-caption">
					<a href="">Projeto Eco Educar</a>
					<p><strong>Agende nossa visita na sua escola</strong></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/imgs/museu itinerante.jpeg" class="img-fluid" alt="" width="1200" height="600">
				<div class="carousel-caption">
					<a href="">Museu Eco Cerrado</a>
					<p><strong></strong></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/imgs/exposição.jpeg" class="img-fluid" alt="" width="1200" height="600">
				<div class="carousel-caption">
					<a href="">Exposição Digital da Fauna e Flora</a>
					<p><strong></strong></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/imgs/treinamentos.jpeg" class="img-fluid" alt="" width="1200" height="600">
				<div class="carousel-caption">
					<a href="">Treinamentos e Capacitações</a>
					<p><strong></strong></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/imgs/eventos.jpeg" class="img-fluid" alt="" width="1200" height="600">
				<div class="carousel-caption">
					<a href="">Eventos Ambientais</a>
					<p><strong></strong></p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!-- fim carrosel -->
	<?php require 'includes/footer.php'; ?>
</html>