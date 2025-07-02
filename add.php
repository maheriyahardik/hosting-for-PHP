<?php include 'db.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        form { width: 300px; margin: 50px auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px; width: 100%; background: green; color: white; border: none; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Add Student</h2>
        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="text" name="phone" placeholder="Phone" required />
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>
