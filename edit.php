<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        form { width: 300px; margin: 50px auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px; width: 100%; background: orange; color: white; border: none; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Edit Student</h2>
        <input type="text" name="name" value="<?= $row['name'] ?>" required />
        <input type="email" name="email" value="<?= $row['email'] ?>" required />
        <input type="text" name="phone" value="<?= $row['phone'] ?>" required />
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
