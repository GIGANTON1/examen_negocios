<?php
if(!empty($_POST)){  
$nombre = $_POST['nombre'] ?? '';
$imagen = $_POST['imagen'] ?? '';
$correo = $_POST['correo'] ?? '';

try{
    $pdo = new PDO('mysql:dbname:matricula_unicah;host=127.0.0.1', 'root', 'orel199719');
    $stmt = $pdo->prepare("INSERT INTO alumnos (nombre_completo, imagen, correo)
    VALUES(?, ?, ?)");
    $stmt ->bindValue(1, $nombre);
    $stmt ->bindValue(2, $imagen);
    $stmt ->bindValue(3, $correo);
    $stmt -> execute();
    echo "Guardado";

}catch(PDOException $e){
    echo $e->getMessage();
}
}
