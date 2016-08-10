<nav class="navbar-default">
	<div class="collapse navbar-collapse mnu-admin" id="collapseExample" style="padding-left: 0;padding-right: 0;">
		<h5 class="indicator mnu-indicator" style="color: #000;padding-left: 25px;">Menú Principal</h5>
		<ul class="nav navbar-nav" style="margin: 2px 0 5px;">
			<li><a href="dashboard.php" id="dashboard">Inicial</a></li>
			<li>
				<a href="#collapsePost" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapsePost">Post&nbsp;<b class="caret"></b></a>
				<ul class="collapse" id="collapsePost">
					<li><a href="#">Novo Post</a></li>
					<li><a href="#">Listar Posts</a></li>
				</ul>
			</li>
			<li>
				<a href="#collapsePub" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapsePub">Publicidade&nbsp;<b class="caret"></b></a>
				<ul class="collapse" id="collapsePub">
					<li><a href="#">Nova Publicidade</a></li>
					<li><a href="#">Listar Publicidades</a></li>
				</ul>
			</li>
			<li><a href="#">Comentários</a></li>
			<li><a href="#">Newsletter (Inscritos)</a></li>
			<li>
				<a href="#collapseUser" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseUser">Usuário&nbsp;<b class="caret"></b></a>
				<ul class="collapse" id="collapseUser">
					<li><a href="#">Novo Usuário</a></li>
					<li><a href="#">Listar Usuários</a></li>
				</ul>
			</li>
			<li><a href="#">Sair</a></li>
		</ul>
	</div>
	<div class="collapse navbar-collapse hidden-md hidden-lg" id="collapseExample2" style="background-color: #f0f0f0;border-bottom: 1px solid #e7e7e7;">
		<form action="./" method="GET">
			<div class="input-group" id="div-src">
				<input type="search" id="input-src" class="form-control" placeholder="Pesquisar..." />
				<span class="input-group-btn" id="btn-src">
					<button type="submit" class="btn btn-default">
						<span class="search"></span>
					</button>
				</span>
			</div>
		</form>
	</div>
</nav>