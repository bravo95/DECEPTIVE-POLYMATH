<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
	<div class="navbar-collapse collapse">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="/DPapp/VistasUsuarios/Vistaadministrador.php">Inicio</a></li>
				<li><a href="/DPapp/VistasUsuarios/Revisarusuarios.php">Revisar Usuarios</a></li>
				<li><a href="/DPapp/VistasUsuarios/Generarestadisticas.php">Generar Estadísticas</a></li>
				<li><a href="/DPapp/Sugerirpregunta.php">Sugerir Pregunta</a></li>
				<li><a href="/DPapp/Generarexamen.php">Generar Examen</a></li>
			</ul>
			<ul class = "nav navbar-nav navbar-right">

				<button type="button" style = "background-color:#FAFAFA" class="btn btn-primary" id ="login"><a href = "/DPapp/index.php"> Log Out</a></button>
				<?php
				session_destroy();
				 ?>
			</ul>
		</div>
	</div>
</div>