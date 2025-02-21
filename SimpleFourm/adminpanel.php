<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$users = json_decode(file_get_contents('users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        unset($users[$_POST['delete']]);
        file_put_contents('users.json', json_encode(array_values($users)));
    }
}
?>
<?php
$file = 'post.json';

if (file_exists($file)) {
    unlink($file);
    echo "File deleted successfully.";
}
$sourceFile = 'copy/post.json';
$destinationFile = 'post.json';

if (copy($sourceFile, $destinationFile)) {
    echo "File copied successfully.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <h2>Users</h2>
    <ul>
        <?php foreach ($users as $index => $user): ?>
            <li>
                <?php echo $user['name']; ?>
                <form method="POST" style="display:inline;">
                    <button type="submit" name="delete" value="<?php echo $index; ?>">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>