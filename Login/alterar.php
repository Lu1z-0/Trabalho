<?php
        include_once("config.php");

        if(!empty($_GET['id'])) {

            $id = $_GET['id'];

            $sqlSelect = "SELECT * FROM ficha WHERE id= $id";

            $result = $conn->query($sqlSelect);

            if($result->num_rows > 0){  

                while($user_data = mysqli_fetch_assoc($result)){
                    $email = $user_data["email"];
                    $sexo = $user_data["sexo"];
                    $telefone = $user_data["telefone"];
                    $estado=  $user_data["estado"];
                    $cidade=  $user_data["cidade"];
                    $endereço =  $user_data["endereço"];
                    $senha =  $user_data["senha"];
                    $confirmar_senha =  $user_data["confirmar_senha"];  
                    }
            }
            else{
                header('Location: sistema.php');
            
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de aluno</title>
    <link rel="stylesheet" type="text/css" href="alterar2.css">
</head>
<body>
    <div id="Titulo">
        <h1>Bem vindo ao alteração de dados</h1>
    </div>
    <a href="sistema.php" class="btn-voltar">voltar</a>
    <div class="Cadastro">
        <div class="card-header">
            <form action="salvaed.php" method="POST">
                <h2>Informe quais dados você quer alterar</h2>
                <div class="card-content-area">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email@gmail.com" class="input" name="email"  value="<?php echo $email?>" required />
                </div>
                <div class="card-content-area">
                    <label for="sexo">Selecione o sexo:</label>
                    <select name="sexo" id="sexo" <?php echo $sexo?>>
                        <option value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''?>>Masculino</option>
                        <option value="feminino"<?php echo ($sexo == 'feminino') ? 'checked' : ''?>>Feminino</option>
                        <option value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ''?>>Outro</option>
                     </select>
                  </div>

                  <div class="card-content-area">
                    <label for="telefone">Telefone <span class="required"></span></label>
                    <input oninput=mascara(this) type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 9999-9999"  title="Número de telefone precisa ser no formato (99) 9999-9999"   minlength="11"
                    maxlength="18" value="<?php echo $telefone?>"/>
                  </div>
                  <div class="card-content-area">
                    <label for="estado" id="estado" placeholder="Estado(UF)" >Estado:</label>
                    <select name="estado" <?php echo $estado?>>
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
                  
                  <div class="card-content-area">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $cidade?>"/>
                  </div>
                    
                  <div class="card-content-area">
                      <label for="endereco">Endereço:</label>
                      <input type="text" id="endereco" name="endereço" value="<?php echo $endereço?>"/>
                    </div>
                  </div>

            
                <div class="card-content-area">
                      <label for="senha">Senha:</label>
                      <input type="password" id="senha" name="senha" value="<?php echo $senha?>" required>
                  </div>
                  
                  <div class="card-content-area">
                      <label for="confirmar_senha">Confirmar Senha:</label>
                      <input type="password" id="confirmar_senha" name="confirmar_senha" onkeyup="validarSenha()"  value="<?php echo $confirmar_senha?>" required>
                  <span id="mensagem" style="color: red;"></span>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update" class="btn">
            </form>
        </div>
    </div>
</body>
</html>