<?php
    session_start();

    if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){
        include_once("config.php");
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM ficha WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            
        }
        else {
            $row = $result->fetch_assoc(); 
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['id'] = $row['id']; 
            header('Location: sistema.php');
            exit();
        }
    }


?>