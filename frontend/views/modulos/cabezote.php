<!--=====================================
Top
======================================-->

<div class="container-fluid bar_top" id="top">
	<div class="container">
		<div class="row">

			<!--======================
			Redes Sociales
			=======================-->

			<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 social">

				<ul>

					<?php
					$social = ControllerPlantilla::ctrEstiloPlantilla();
					$jsonRedesSociales = json_decode($social["redesSociales"], true);

					foreach ($jsonRedesSociales as $key => $value) {
						/* var_dump($key,$value["red"]); */

						echo '<li>
								<a href="' . $value["url"] . '" target="_blank">
									<i class="fa ' . $value["red"] . ' red_social ' . $value["estilo"] . '" aria-hidden="true"></i>
								</a>
							</li>';
					}

					?>


				</ul>
			</div>

			<!--=====================================
			Registro
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">

				<ul>
					<li><a href="#modal_ingreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modal_registro" data-toggle="modal">Crear una cuenta</a></li>
				</ul>

			</div>

			<!--=====================================
			Idioma
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 idioma">

				<ul >

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="http://localhost/Art_Gir/backend/views/img/template/en.png" alt="">English <span class="caret"></span>
							<ul class="dropdown-menu">
								<li>
									<a class="btn" onclick="changeLang('es')">
									<img src="http://localhost/Art_Gir/backend/views/img/template/es.png" alt=""> Spanish</a>
								</li>
							</ul>
					</li>

				</ul>

			</div>
		</div>
	</div>
</div>

<!--=====================================
Header
======================================-->

<header class="container-fluid">

	<div class="container">
		<div class="row" id="cabezote">

			<!--=====================================
			Logotipo
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				<a href="#">
					<img src="http://localhost/Art_Gir/backend/<?php echo $social["logo"]; ?>" class="img-responsive">
				</a>
			</div>

			<!--=====================================
			Categorias y Buscador
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!--=====================================
				Btn Categorias
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 back_color" id="btn_categorias">

					<p>CATEGORÍAS

						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>

					</p>

				</div>

				<!--=====================================
				Buscador
				======================================-->

				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">

					<span class="input-group-btn">

						<a href="#">

							<button class="btn btn-default back_color" type="submit">

								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>

			</div>

			<!--=====================================
			Carrito de compras
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 " id="carrito">

				<a href="#">

					<button class="btn btn-default pull-left back_color">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</button>
				</a>

				<p>TU CESTA <span class="cantidad_cesta"></span> <br> USD $ <span class="suma_cesta"></span></p>

			</div>

		</div>

		<!--=====================================
		Secion Categorias
		======================================-->
		<div class="col-xs-12 back_color" id="categorias">

			<?php

			$item = null;
			$valor = null;

			$categorias = controladorProductos::ctrListarCategorias($item, $valor);


			foreach ($categorias as $key => $value) {
				/* $icon_categoria = controladorProductos::ctrListarCategorias($item, $valor);
				$json_icon_categoria = json_decode($icon_categoria["icono"], true); */


				echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 ">
									<h4>
										<img src="http://localhost/Art_Gir/backend/' . $value["icono"] . '" class="img-responsive">
										<a href="' . $value["ruta"] . '" class="pixel_categorias">' . $value["nombre"] . '
										<ion-icon name="chevron-forward-outline"></ion-icon>
										</a>
									</h4>
				
									<hr>
									<ul>';

				$item = "id_categoria";
				$valor = $value["id"];

				$subcategorias = controladorProductos::ctrListarSubcategorias($item, $valor);

				/* var_dump($subcategorias); */

				foreach ($subcategorias as $key => $value) {
					echo '<li>
						<a href=' . $value["ruta"] . ' class="pixel_sub_categorias">' . $value["nombre"] . '
						</a>
						
					</li>';
				}

				echo '</ul>

							
						</div>';
			}

			?>

			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 all_categorias">
				<h5>
					<a href="views/allCategorias.php">Ver mas categorias...</a>
				</h5>
			</div>

		</div>
	</div>
</header>