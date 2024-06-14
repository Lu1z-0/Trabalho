<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $telefone = $_POST["telefone"];
        $estado=  $_POST["estado"];
        $cidade=  $_POST["cidade"];
        $endereço =  $_POST["endereço"];
        $senha =  $_POST["senha"];
        $confirmar_senha =  $_POST["confirmar_senha"];  

        $sqlUpdate = "UPDATE ficha SET email = '$email', sexo = '$sexo', telefone = '$telefone', estado = '$estado', cidade = '$cidade', endereço = '$endereço', senha = '$senha', confirmar_senha = '$confirmar_senha'
        WHERE id = $id";

        $result = $conn-> query($sqlUpdate);
    }
    header('Location: sistema.php');

?>