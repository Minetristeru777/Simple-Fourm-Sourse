<?php
$sourceFile = 'copy/index.php';
$destinationFile = 'index.php';

if (copy($sourceFile, $destinationFile)) {
    echo "File copied successfully.";
}
header('Location install.php')
?>
