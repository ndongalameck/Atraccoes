<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Vawel" />
	<title>Atracções - Formulário de Autenticação</title>
	<link rel="icon" type="image/png" href="../code/images/logo/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../code/styles/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/app.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/icons.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/responsive.css" />
	<script type="text/javascript" src="../code/scripts/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../code/scripts/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="../code/scripts/atraccoes/app.js"></script>
	<style type="text/css">
		.bar-top ul li:last-of-type{display:none!important;}
		.bar-top ul{padding: 3px 20px!important;}
		.copy{padding: 10px 20px!important;}
		.copy div{font-size: 1.06em!important;}
		.category{text-align: center;}
		.no-visible{display: none;}.mnu-buttons{display: none;}
		@media screen and (min-width: 1200px){
			.navbar .navbar-brand{width: 320px; height: 100px;}
		}.home-content{padding: 13px 0;}.container .row-padding{padding: 6px 15px!important;}
	</style>
</head>
<body>
	<div class="container">
		<?php require 'master/header.req.php'; ?>
		<main class="row home-box">
			<article class="col-md-12 row-padding pull-left no-lr-padding">
				<h3 class="category form-title">FORMULÁRIO DE AUTENTICAÇãO</h3>
				<div class="home-content pull-left no-tb-padding">
					<div class="login-form panel panel-default">
						<!--<span class="alert alert-danger message">
							<p class="center">Testando</p>
						</span>-->
						<span class="alert alert-info message">
							<p class="center">Insira suas credenciais para serem autenticadas.</p>
						</span>
						<form action="" method="POST">
							<div class="input-group" id="div-src">
								<span class="input-group-addon">
									<span class="user"></span>
								</span>
								<input type="text" id="input-src" class="form-control" placeholder="Nome de usuário" />
							</div>
							<div class="input-group" id="div-src">
								<span class="input-group-addon">
									<span class="password"></span>
								</span>
								<input type="password" id="input-src" class="form-control" placeholder="Senha" />
							</div>
							<button type="submit" class="btn btn-default">
								<span class="unlock">&nbsp;Autenticar</span>
							</button>
						</form>
					</div>
				</div>
				<a href="/Atraccoes" class="btn btn-default back-to-site">
					<span class="logout globe">&nbsp;Voltar ao site</span>
				</a>
			</article>
		</main>
		<?php require 'master/footer.req.php'; ?>
	</div>
</body>
</html>