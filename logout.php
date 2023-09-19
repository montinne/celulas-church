<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Células Church - Dashboard</title>
</head>
<body>
<?php

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: index.php");
?>
</body>
</html>