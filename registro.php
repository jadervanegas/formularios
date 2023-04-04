<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final Unidad 1 - Registrar Usuario</title>
    <!-- Enlace a la biblioteca de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="css/paginastyle.css">
  </head>
  <body>
    <!-- Agrega la barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Proyecto Final Unidad 1</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pagina.html">Página 2</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="#">Usuarios</a>
              </li>
          </ul>
      </div>
    </nav>
    <div class="container mt-5">
		<h2>Formulario de registro</h2>
		<form action="guardar_registro.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre completo:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" required>
			</div>
			<div class="form-group">
				<label for="cedula">Cédula:</label>
				<input type="text" class="form-control" id="cedula" name="cedula" required>
			</div>
			<div class="form-group">
				<label for="direccion">Dirección:</label>
				<input type="text" class="form-control" id="direccion" name="direccion" required>
			</div>
			<div class="form-group">
				<label for="telefono">Teléfono:</label>
				<input type="text" class="form-control" id="telefono" name="telefono" required>
			</div>
			<div class="form-group">
				<label for="correo">Correo electrónico:</label>
				<input type="email" class="form-control" id="correo" name="correo" required>
			</div>
			<button type="submit" class="btn btn-primary">Registrar</button>
		</form>
    <hr>
	</div>
 <!-- Agrega el footer -->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Información del creador</h3>
          <p>Este sitio web fue creado por Jessica Suarez Alvarez.</p>
        </div>
        <div class="col-md-4">
          <h3>Redes sociales</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3>Links de interés</h3>
          <ul>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="#">Contáctenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Agrega el enlace a la biblioteca de jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Agrega el enlace a la biblioteca de Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- Agrega el enlace a la biblioteca de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
