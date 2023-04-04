<?php
class Usuarios {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "proyectofinalunidad1";
    private $conexion;

    // Constructor de la clase
    function __construct() {
        // Conectar con la base de datos
        $this->conexion = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conexion->connect_errno) {
            die('Error de conexión: ' . $this->conexion->connect_errno);
        }
    }

    public function insertar($nombre, $cedula, $direccion, $telefono, $correo) {
        $sql = "INSERT INTO usuarios (nombre, cedula, direccion, telefono, correo) VALUES ('$nombre', '$cedula', '$direccion', '$telefono', '$correo')";

        if ($this->conexion->query($sql) === TRUE) {
            echo "Usuario agregado exitosamente";
        } else {
            echo "Error al agregar usuario: " . $this->conn->error;
        }
    }

    public function modificar($id, $nombre, $cedula, $direccion, $telefono, $correo) {
        $sql = "UPDATE usuarios SET nombre='$nombre', cedula='$cedula', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE id=$id";

        if ($this->conexion->query($sql) === TRUE) {
            echo "Usuario actualizado exitosamente";
        } else {
            echo "Error al actualizar usuario: " . $this->conn->error;
        }
    }

    function listar() {
        // Obtener una lista de todos los usuarios en la base de datos
        $sql = "SELECT * FROM usuarios";
        $result = $this->conexion->query($sql);
        if (!$result) {
            die('Error al listar usuarios: ' . $this->conexion->error);
        }
        $usuarios = array();
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    }

    public function listar_por_id($id) {
        // Obtener los datos de un usuario específico
        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $result = $this->conexion->query($sql);
        if (!$result) {
            die('Error al obtener usuario: ' . $this->conexion->error);
        }
        return $result->fetch_assoc();
    }

    function eliminar($id) {
        // Eliminar un usuario de la base de datos
        $sql = "DELETE FROM usuarios WHERE id=$id";
        if (!$this->conexion->query($sql)) {
            die('Error al eliminar usuario: ' . $this->conexion->error);
        }
    }

    function __destruct() {
        // Cerrar la conexión con la base de datos
        $this->conexion->close();
    }
}