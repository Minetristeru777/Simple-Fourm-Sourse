<?php
session_start();
$posts = json_decode(file_get_contents('post.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $posts[] = ['title' => $title, 'content' => $content, 'author' => $_SESSION['user']['name']];
    file_put_contents('post.json', json_encode($posts));
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Post</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="title" placeholder="Post Title" required>
        <textarea name="content" placeholder="Post Content" required></textarea>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>