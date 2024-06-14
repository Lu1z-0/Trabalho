<?php
include_once("config.php");

if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    // Consulta SQL para selecionar o registro que será excluído
    $sqlSelect = "SELECT * FROM ficha WHERE id= $id";
    $result = $conn->query($sqlSelect);

    // Verifica se o registro existe
    if($result->num_rows > 0){  

        // Consulta SQL para excluir o registro
        $sqlDelete = "DELETE FROM ficha WHERE id=$id";
        
        // Executa a consulta de exclusão
        $resultDelete = $conn->query($sqlDelete);

        // Verifica se a exclusão foi bem-sucedida
        if($resultDelete === TRUE) {
            // Redireciona após a exclusão bem-sucedida
            header('Location: loginp.php');
        } else {
            // Se houver algum erro na exclusão, exiba uma mensagem de erro
            echo "Erro ao excluir registro: " . $conn->error;
        }
    } 
    else {
        // Se o registro não existir, exiba uma mensagem ou tome outra ação apropriada
        echo "Registro não encontrado.";
    }
    
}