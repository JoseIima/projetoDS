<?php

if (isset($_POST['submit'])) {
    //  print_r('Nome: ' . $_POST['nome']);
    //  print_r('<br>');
    //  print_r('Email: ' . c);
    //  print_r('<br>');
    //   print_r('Telefone: ' . $_POST['telefone']);
    //   print_r('<br>');
    //  print_r('Sexo: ' . $_POST['genero']);
    //   print_r('<br>');
    //   print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    //   print_r('<br>');
    //   print_r('Cidade: ' . $_POST['cidade']);
    //   print_r('<br>');
    //   print_r('Estado: ' . $_POST['estado']);
    //   print_r('<br>');
    //   print_r('Endereço: ' . $_POST['endereco']);

    include_once ('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conn, "INSERT INTO usuarios_form(nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$senha', '$email', '$telefone',  '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/formularioStyle.css">
    <title>Cadastro | IG</title>

    <style>
        body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(./imagens/fundo5.jpg);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }
    </style>

</head>

<body>
    
    
    <div class="box">
        <br>
        <form action="formulario.php" method="post">
        <a href="home4.php">Voltar</a>
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput"><b>Cidade</b></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput"><b>Estado</b></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput"><b>Endereço</b></label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>