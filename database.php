<?php
$pdo = new PDO('sqlite:students.db');

$pdo->exec("CREATE TABLE IF NOT EXISTS students (
    id INTEGER PRIMARY KEY, 
    name TEXT, 
    turma TEXT,
    faltas INTEGER,
    notas TEXT
)");
?>
