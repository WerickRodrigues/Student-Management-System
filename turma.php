<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $turma = $_POST['turma'];

    $stmt = $pdo->prepare("UPDATE items SET notas = :notas WHERE id = :id");
    $stmt->bindParam(':turma', $turma);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: turma.php');
}
?>