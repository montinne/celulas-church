<?php
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "cenabnh";
$conn = mysqli_connect($server, $dbuser, $dbpassword, $dbname);

if($conn -> error){
    die("Falha ao conectar o banco de dados: " . $conn->error);
}
?>