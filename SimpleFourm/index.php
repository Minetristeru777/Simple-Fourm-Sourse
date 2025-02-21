<?php
$sourceFile = 'copy/index.php';
$destinationFile = 'index.php';

if (copy($sourceFile, $destinationFile)) {
    echo "File copied successfully.";
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
<a href="install.php">enter</a>
