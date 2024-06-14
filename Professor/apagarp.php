<?php
include_once("config1.php");

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM ficha WHERE id = $id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM ficha WHERE id = $id";
        $resultDelete = $conn->query($sqlDelete);

        if ($resultDelete === TRUE) {
            // Excluiu com sucesso, redirecione agora
            header('Location: sistemap.php');
            exit;
        } else {
            // Houve um erro na exclusão
            echo "Erro ao deletar registro: " . $conn->error;
        }
    } else {
        // Não há registro com o ID fornecido
        echo "Não há registro com o ID fornecido.";
    }
} else {
    // Não foi fornecido nenhum ID
    echo "Nenhum ID fornecido para exclusão.";
}
?>

