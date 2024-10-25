<?php
// Leer datos enviados a través de fetch (en el cuerpo de la petición)
$data = file_get_contents("php://input");

require "conexion.php";

// Consulta general si no se envía ninguna búsqueda
$consulta = $pdo->prepare("SELECT * FROM tareas ORDER BY id DESC");
$consulta->execute();

// Si $data no está vacío, significa que hay una búsqueda
if ($data != "") {
    // Protege contra inyecciones SQL usando consultas preparadas
    $consulta = $pdo->prepare("SELECT * FROM tareas WHERE nombre LIKE ? OR descripcion LIKE ?");
    $busqueda = "%" . $data . "%";
    $consulta->execute([$busqueda, $busqueda]);
}

// Obtener todos los resultados
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($resultado);
