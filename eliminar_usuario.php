<?php
// Incluimos la clase Usuarios
include_once('Usuarios.php');

// Creamos un objeto de la clase Usuarios
$usuarios = new Usuarios();

// Verificamos si se ha pasado un id por GET
if (isset($_GET['id'])) {
    // Obtenemos el id y lo sanitizamos
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Eliminamos el usuario
    $usuarios->eliminar($id);

    // Redirigimos a la página de lista de usuarios
    header("Location: lista_usuarios.php");
    exit();
}