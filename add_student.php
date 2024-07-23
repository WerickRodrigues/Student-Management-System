<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $turma = $_POST['turma'];
    $faltas = $_POST['faltas'];
    $notas = $_POST['notas'];

    $stmt = $pdo->prepare("INSERT INTO students (name, turma, faltas, notas) VALUES (:name, :turma, :faltas, :notas)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':turma', $turma);
    $stmt->bindParam(':faltas', $faltas);
    $stmt->bindParam(':notas', $notas);
    $stmt->execute();

    echo "Student added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Add Student</h1>
    <form method="POST">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="turma">Class (Turma):</label>
        <input type="text" id="turma" name="turma" required><br>
        <label for="faltas">Number of Absences (Faltas):</label>
        <input type="number" id="faltas" name="faltas" required><br>
        <label for="notas">Grades (Notas):</label>
        <input type="text" id="notas" name="notas" required><br>
        <button type="submit">Add Student</button>
    </form>
    <a href="index.php">Back to Main Menu</a>
</body>
</html>
