<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $notas = $_POST['notas'];

    $stmt = $pdo->prepare("UPDATE students SET notas = :notas WHERE id = :id");
    $stmt->bindParam(':notas', $notas);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: list_students.php');
}
?>
