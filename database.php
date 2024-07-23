<?php
// Cria uma nova conexão SQLite
$pdo = new PDO('sqlite:students.db');

// Cria a tabela de alunos, se não existir
$pdo->exec("CREATE TABLE IF NOT EXISTS students (
    id INTEGER PRIMARY KEY, 
    name TEXT, 
    turma TEXT,
    faltas INTEGER,
    notas TEXT
)");
?>
