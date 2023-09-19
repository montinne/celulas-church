<?php

if(isset($_POST['email']) || isset($_POST['password'])) {

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }
}

?>