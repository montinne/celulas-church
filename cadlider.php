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
$namelider = $_POST['namelider'];
$whatsapp = $_POST['whatsapp'];
$address = $_POST['address'];
$reference = $_POST['reference'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$cpf = $_POST['cpf'];
$msg = false;

if(isset($_FILES['picture'])){
    $extensao = strtolower(substr($_FILES['picture']['name'], -4)); //pega a extensão do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo

    // Crie o diretório se ele não existir
    $diretorio = "assets/".$cpf.'/';
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0777, true);
    }

    $diretorio_completo = $diretorio . $novo_nome;
    
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $diretorio_completo)){
        $msg = "Imagem enviada";
    } else {
        $msg = "Falha ao enviar imagem";
    }
}

$sql = "INSERT INTO tblideres(namelider,whatsapp,address,reference,city,state,zipcode,cpf,picture) VALUES('$namelider','$whatsapp','$address','$reference','$city','$state','$zipcode','$cpf','$novo_nome')";

if (mysqli_query($conn, $sql)) {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro bem-sucedido!",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location = "cadastrar-lider.php";
            });
          </script>';
} else {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erro ao cadastrar",
                text: "' . mysqli_error($conn) . '"
            });
          </script>';
}
mysqli_close($conn);
?>
</body>
</html>
