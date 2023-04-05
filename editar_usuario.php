<?php
// Incluir la clase Usuarios
include 'Usuarios.php';

// Crear una instancia de la clase Usuarios
$usuarios = new Usuarios();

// Obtener el id del usuario a editar
$id = $_GET['id'];

// Obtener los detalles del usuario
$usuario = $usuarios->listar_por_id($id);

// Si el usuario no existe, mostrar un mensaje de error
if (!$usuario) {
    echo "Usuario no encontrado";
    exit;
}

// Si se envió el formulario para actualizar el usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Actualizar los datos del usuario
    $usuarios->modificar($id, $nombre, $cedula, $direccion, $telefono, $correo);

    // Redirigir a la lista de usuarios
    header('Location: lista_usuarios.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final Unidad 1 - Editar Usuario</title>
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
        <h1>Editar Usuario</h1>
        <form method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $usuario['cedula']; ?>">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $usuario['direccion']; ?>">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario['telefono']; ?>">
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    <hr>
	</div>
 <!-- Agrega el footer -->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Información del creador</h3>
          <p>Este sitio web fue creado por Jhon Jader Vanegas.</p>
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
