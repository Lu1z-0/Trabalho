<?php
        include_once('config.php');

        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $datan = $_POST['datan'];
            $email = $_POST['email'];
            $sexo = $_POST['sexo'];
            $telefone = $_POST['telefone'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $endereço = $_POST['endereço'];
            $senha = $_POST['senha'];
            $confirmar_senha = $_POST['confirmar_senha'];
            
            $result = mysqli_query($conn, "INSERT INTO ficha (nome,cpf,datan,email,sexo,telefone,estado,cidade,endereço,senha,confirmar_senha)
             VALUES ('$nome','$cpf','$datan','$email','$sexo','$telefone','$estado','$cidade','$endereço','$senha','$confirmar_senha')");
        }


?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" type="text/css" href="cadastrop1.css">
    <style>
        
        .card-header {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 80px;
            padding: -20px;
            width: 30%;
            margin: 0 auto;
        }
        .card-content-area {
            margin-bottom: 1px;
        
            
        }
        .btn {
            background-color: blue;
            color: white;
            position: relative;
            left: 20px;
        }
    </style>
</head>
<body>
    <div id="Titulo">
        <h1>Bem vindo ao Cadastro de professor</h1>
    </div>
    <a href="http://localhost/Teste/trabalho/Professor/loginp.php" class="btn-voltar">voltar</a>
    
    <div class="Cadastro">
        <div class="card-header">
            <form action="cadastrop.php" method="POST">
                <h2>Informe seus dados</h2>
                <div class="card-content-area">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" placeholder="nome" name="nome" class="input" required />
                </div>
                <div class="card-content-area">
                    <label for="cpf">CPF:</label>
                    <input oninput="mascara(this)" type="text" placeholder="CPF: 999.999.999-99" class="input" name="cpf"
                            minlength="11"
                            maxlength="11"
                            pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}"
                            required
                            autocomplete="off" />
                </div>
                <div class="card-content-area">
                    <label for="date">Data de Nascimento:</label>
                    <input type="date" id="date" name="datan" min="1850-01-01" required class="input"/>
                </div>
                <div class="card-content-area">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email@gmail.com" class="input" name="email" required />
                </div>
                <div class="card-content-area">
                    <label for="sexo">Selecione o sexo:</label>
                    <select name="sexo" id="sexo">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                     </select>
                </div>
                <div class="card-content-area">
                    <label for="telefone">Telefone:</label>
                    <input oninput=mascara(this) type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 9999-9999"  title="Número de telefone precisa ser no formato (99) 9999-9999"   minlength="11" maxlength="18"/>
                </div>
                <div class="card-content-area">
                    <label for="estado">Estado:</label>
                    <select name="estado">
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="card-content-area">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade"/>
                </div>
                <div class="card-content-area">
                    <label for="endereço">Endereço:</label>
                    <input type="text" id="endereço" name="endereço" />
                </div>
                <div class="card-content-area">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="card-content-area">
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" onkeyup="validarSenha()" required>
                    <span id="mensagem" style="color: red;"></span>
                </div>
                <input type="submit" name="submit" id="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>
