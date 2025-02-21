<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forum</title>
</head>
<body>
    <header>
        <h1>Welcome to the Forum</h1>
        <?php if (isset($_SESSION['user'])): ?>
            <p>Hello, <?php echo $_SESSION['user']['name']; ?></p>
			<a href="newpost.php">New Post</a>
            <a href="logout.php">Logout</a>
            <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                <a href="adminpanel.php">Admin Panel</a>
            <?php endif; ?>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="registrations.php">Register</a>
        <?php endif; ?>
    </header>
    <main>
        <h2>Posts</h2>
        <?php
        $posts = json_decode(file_get_contents('post.json'), true);
        ?>
		<?php foreach ($posts as $post): ?>
        <h2><?php echo htmlspecialchars($post['title']); ?></h2>
        <p><?php echo htmlspecialchars($post['content']); ?></p>
        <p><em>By: <?php echo htmlspecialchars($post['author']); ?></em></p>
    <?php endforeach; ?>
    </main>
</body>
</html>