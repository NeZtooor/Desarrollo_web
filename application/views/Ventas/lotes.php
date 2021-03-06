<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Stock de productos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<nav class="top-bar" data-topbar>
								<section class="top-bar-section">
									<!-- Right Nav Section -->
									<ul class="right">
										<li class="has-form">
											<div class="row collapse">
												<div class="large-8 small-9 columns">
													<input type="text" placeholder="Inserte su texto" style="height:31px;">
												</div>
												<div class="large-4 small-3 columns">
													<a href="#" class="round alert button expand" style="color:white;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left">
										<li class="divider" style="width:15px;"></li>
										<li class="has-dropdown">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><label>Para los seleccionados</label></li>
												<li><a href="">Dar de baja</a></li>
												<li><a href="">Traspaso</a></li>
											</ul>
										</li>
									</ul>
								</section>
							</nav>
							
							<br>
							<br>
							<br>
							
							<ul class="pagination" style="position:relative; left:10%;">
								<li class="arrow unavailable"><a href="">&laquo;</a></li>
								<li class="current"><a href="">1</a></li>
							</ul>
						</div>
					</div>
					<br>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DE LA TABLA-->
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<table>
								<thead>
									<tr>
										<th>cod_lote</th>
										<th>Nombre</th>
										<th>Laboratorio</th>
										<th>Presentacion</th>
										<th>Cantidad</th>
										<th>Fecha_f</th>
										<th>Fecha_v</th>
										<th>Operaciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>001</td>
										<td>Ritalin</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>37</td>
										<td>01-07-2009</td>
										<td style="color:red;">01-02-2014</td>
										<td>dar de baja/traspaso</td>
									</tr>
									<tr>
										<td>002</td>
										<td>Ritalin</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>3</td>
										<td>01-12-2010</td>
										<td>01-07-2015</td>
										<td>dar de baja/traspaso</td>
									</tr>
									<tr>
										<td>003</td>
										<td>Ritalin</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>10</td>
										<td>01-01-2011</td>
										<td>01-08-2015</td>
										<td>dar de baja/traspaso</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<!--FIN DE LA TABLA-->
					
					<!--INICIO DEL FOOTER-->
					<br>
					<div class="row">
						<div class="large-12 columns">
							<ul class="pagination" style="position:relative; left:10%;">
								<li class="arrow unavailable"><a href="">&laquo;</a></li>
								<li class="current"><a href="">1</a></li>
							</ul>
						</div>
					</div>
					<!--FIN DEL FOOTER-->
				</div>
			</div>
		</div>
		<br>
		
		
		<?php #require("template/footer.php"); ?>
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
