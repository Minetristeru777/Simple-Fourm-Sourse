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
header('Location index.php')
?>
