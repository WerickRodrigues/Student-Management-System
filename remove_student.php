<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: list_students.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Remove Student</h1>
    <form method="POST">
        <label for="id">Student ID:</label>
        <input type="number" id="id" name="id" required><br>
        <button class="remove" type="submit">Remove Student</button>
    </form>
    <a href="index.php">Back to Main Menu</a>
</body>
</html>
