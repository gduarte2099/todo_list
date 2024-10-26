<?php
if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // Verifica si se ha marcado el checkbox de "completada"
    $completada = isset($_POST['completada']) ? 1 : 0;

    require("conexion.php");

    if (empty($_POST['idt'])) {
        $query = $pdo->prepare("INSERT INTO tareas (nombre, descripcion, completada) VALUES (:nom, :dsc, :comp)");
        $query->bindParam(":nom", $nombre);
        $query->bindParam(":dsc", $descripcion);
        $query->bindParam(":comp", $completada);
        $query->execute();
        $pdo = null;
        echo "ok";
    } else {
        $id = $_POST['idt'];
        $query = $pdo->prepare("UPDATE tareas SET nombre = :nom, descripcion = :dsc, completada = :comp WHERE id = :id");
        $query->bindParam(":nom", $nombre);
        $query->bindParam(":dsc", $descripcion);
        $query->bindParam(":comp", $completada);
        $query->bindParam(":id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
}

