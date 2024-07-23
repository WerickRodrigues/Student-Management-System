<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $faltas = $_POST['faltas'];

    $stmt = $pdo->prepare("UPDATE students SET faltas = :faltas WHERE id = :id");
    $stmt->bindParam(':faltas', $faltas);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: list_students.php');
}
?>
