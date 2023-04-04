<?php
// Incluir la clase Usuarios
require_once('Usuarios.php');

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Crear una instancia de la clase Usuarios
    $usuarios = new Usuarios();

    // Insertar el nuevo usuario en la base de datos
    $usuarios->insertar($nombre, $cedula, $direccion, $telefono, $correo);

    // Redireccionar al usuario de vuelta a la página de registro
    header('Location: lista_usuarios.php');

