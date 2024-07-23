    <?php
    include 'database.php';

    $stmt = $pdo->query("SELECT * FROM students");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Student List</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Student List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class (Turma)</th>
                <th>Grades (Notas)</th>
                <th>Number of Absences (Faltas)</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['id']); ?></td>
                <td><?php echo htmlspecialchars($student['name']); ?></td>
                <td><?php echo htmlspecialchars($student['turma']); ?></td>
                <td>
                    <form method="POST" action="update_notas.php">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
                        <input type="text" name="notas" value="<?php echo htmlspecialchars($student['notas']); ?>">
                        <button type="submit">Update</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="update_faltas.php">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
                        <input type="number" name="faltas" value="<?php echo htmlspecialchars($student['faltas']); ?>" min="0">
                        <button type="submit">Update</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="remove_student.php">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
                        <button type="submit">Remove</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="index.php">Back to Main Menu</a>
    </body>
    </html>
