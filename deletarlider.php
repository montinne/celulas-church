<?php

include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
<?php include_once "config.php"; ?>
<?php

$id = $_GET['id'];
$sql = "DELETE FROM tblideres WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
            Swal.fire({
                icon: "success",
                title: "Deletado com Sucesso!",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location = "gerenciar-lider.php?searchlider=&submit=";
            });
          </script>';
}else {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erro ao deletar",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location = "gerenciar-lider.php?searchlider=&submit=";
            });
          </script>';
}
?>
</body>
</html>