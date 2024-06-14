<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="faixa-preta">Área do Aluno
    
</div>

<a href="http://localhost/Teste/trabalho/Professor/loginp.php" class="link-professor">Área do Professor</a>
    <div class="container right-panel-active" >
        <div class="container_form1 container--signin">
            <form action="testloge.php" method="POST" class="form" id="form1">
                <h2 class="form_title">Login:</h2>
                <input type="email" id="email" placeholder="Email@gmail.com" class="input" name="email" required />
                <input type="password" placeholder="Senha" class="input" name="senha" required/>
                
                <a href="http://localhost/Teste/trabalho/Cadastro/cadastro.php" class="link">Ainda Não tem Cadastro?</a>
                <input type="submit" name="submit" id="submit" class="btn">
            </form>
        </div>
    
</body>
</html>

