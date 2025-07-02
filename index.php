<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Read</title>
    <style>
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        a { text-decoration: none; margin: 0 5px; }
        .add-btn { display: block; width: 150px; margin: 20px auto; padding: 10px; text-align: center; background: green; color: white; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Student List</h2>
    <a class="add-btn" href="add.php">Add New Student</a>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
