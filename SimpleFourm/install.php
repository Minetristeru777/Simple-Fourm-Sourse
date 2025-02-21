<?php
session_start();
$users = json_decode(file_get_contents('users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $users[] = ['name' => $name, 'password' => $password, 'role' => 'admin'];
    file_put_contents('users.json', json_encode($users));
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instaling Fourm</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Install Fourm</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Install Fourm</button>
    </form>
</body>
</html>