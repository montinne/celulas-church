<?php

if(!isset($_SESSION)) {
    session_start();
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Células Church - Dashboard</title>
</head>
<body>
<?php


if(!isset($_SESSION['id'])) {
    die('<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
            Swal.fire({
                icon: "error",
                title: "Você precisa está logado para acessar!",
                showConfirmButton: true,

            }).then(function() {
                window.location = "index.php";
            });
          </script>');
}


?>
</body>
</html>