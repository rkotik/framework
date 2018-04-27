<?php require RUTA_APP . '/views/inc/header.php' ;?>
<!-- Inicio del codigo del sitio -->
<nav class="framework py-4" >
	<h1 class="display-4 text-center"><?php echo $datos['titulo'] ;?></h1>
	<p class="lead">Este es un framework construído a través de un curso realizado en YouTube &copy.</p>
	<p>Solamente cumple con los mínimos requisitos para su uso.<br />No se asegura que no contenga fallas, ni sea seguro. Su uso acepta las limitaciones que este software pudiera tener.</p>
</nav>

<div class="container">
	<h1 class="display-4 text-center py-3">Configuración mínima del Framework</h1>
	<!-- Primera tarjeta -->
	<div class="card my-2">
		<div class="card-header">
			<h4>Archivo .htaccess de la carpeta public</h4>
		</div>
		<div class="card-body">
			<p>
				Dirigirse a la carpeta public y editar el archivo .htaccess y hacer las modificaciones de acuerdo al ejemplo. <br>
				En la linea RewriteBase escribir el dominio que correspondiera, incluyendo /public <br>
				Ejemplo: <span class="lead">http://midominio.com/public</span>
			</p>
		</div>
	</div><!-- Primera tarjeta -->
	<!-- Segunda tarjeta -->
	<div class="card my-2">
		<div class="card-header">
			<h4>Estructura básica del Framework</h4>
		</div>
		<div class="card-body">
			<ul>
				<li><i class="fas fa-folder-open icon-sep"></i> Raíz del sitio</li>
					<ul>
						<li><i class="fas fa-folder-open icon-sep"></i> app</li>
							<ul>
								<li><i class="fas fa-folder-open icon-sep"></i> config <small class="cursive">(carpeta donde se carga la configuración inicial)</small></li>
								<ul>
									<li><i class="fas fa-cog icon-sep"></i> config.ini</li>
									<li><i class="fab fa-php icon-sep"></i> configurar.php</li>
								</ul>
								<li><i class="fas fa-folder-open icon-sep"></i> controllers <small class="cursive">(aquí se crean los controladores)</small></li>
								<ul>
									<li><i class="fab fa-php icon-sep"></i> home.php</li>
								</ul>
								<li><i class="fas fa-folder-open icon-sep"></i> helpers <small class="cursive">(lugar para instalar o crear aplicaciones para mejorar el Framework)</small></li>
								<li><i class="fas fa-folder-open icon-sep"></i> libraries <small class="cursive">(aquí se cargan los controladores básicos del Framework)</small></li>
								<ul>
									<li><i class="fab fa-php icon-sep"></i> Base.php</li>
									<li><i class="fab fa-php icon-sep"></i> Controlador.php</li>
									<li><i class="fab fa-php icon-sep"></i> Core.php</li>
								</ul>
								<li><i class="fas fa-folder-open icon-sep"></i> models <small class="cursive">(acá se cargan los modelos, cuya función es enlazar la aplicación con la base de datos)</small></li>
								<li><i class="fas fa-folder-open icon-sep"></i> views <small class="cursive">(acá se guardan todas la vistas)</small></li>
									<ul>
										<li><i class="fas fa-folder-open icon-sep"></i> inc <small class="cursive">(en esta carpeta se guardan las páginas de encabezado y pie)</small></li>
										<ul>
											<li><i class="fab fa-php icon-sep"></i> footer.php</li>
											<li><i class="fab fa-php icon-sep"></i> header.php</li>
										</ul>
										<li><i class="fas fa-folder-open icon-sep"></i> home <small class="cursive">(acá van todas las vistas de Framework)</small></li>
										<ul>
											<li><i class="fab fa-php icon-sep"></i> home.php</li>
										</ul>
									</ul>
									<li><i class="fas fa-file icon-sep"></i> .htaccess</li>
									<li><i class="fab fa-php icon-sep"></i> autoload.php</li>
								</ul>
						<li><i class="fas fa-folder-open icon-sep"></i> public</li>
							<ul>
								<li><i class="fas fa-folder-open icon-sep"></i> css</li>
								<ul>
									<li><i class="fab fa-css3-alt icon-sep"></i> styles.css</li>
								</ul>
								<li><i class="fas fa-folder-open icon-sep"></i> fonts</li>
								<li><i class="fas fa-folder-open icon-sep"></i> img</li>
								<li><i class="fas fa-folder-open icon-sep"></i> js</li>
								<ul>
									<li><i class="fab fa-js icon-sep"></i> main.js</li>
								</ul>
								<li><i class="fas fa-file icon-sep"></i> .htaccess</li>
								<li><i class="fab fa-php icon-sep"></i> index.php</li>
							</ul>
						<li><i class="fas fa-file icon-sep"></i> .htaccess</li>
					</ul>
			</ul>
		</div>
	</div><!-- Segunda tarjeta -->

</div>
<!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>