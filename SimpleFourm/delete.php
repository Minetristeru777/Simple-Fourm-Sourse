<?php
$file = 'install.php';

if (file_exists($file)) {
    unlink($file);
    echo "File deleted successfully.";
} else {
    echo "File does not exist.";
}
$file = 'delete.php';

if (file_exists($file)) {
    unlink($file);
    echo "File deleted successfully.";
} else {
    echo "File does not exist.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
<a href="index.php">enter</a>