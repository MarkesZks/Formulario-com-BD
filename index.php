<?php

if(isset($_POST['submit']))
/*{

print_r('Nome: ' . $_POST['nome']);
print_r('<br>');
print_r('Email: ' . $_POST['email']);
print_r('<br>');
print_r('Telefone: ' . $_POST['telefone']);
print_r('<br>');
print_r('Sexo: ' . $_POST['genero']);
print_r('<br>');
print_r('Data de nascimento : ' . $_POST['data_nascimento']);
print_r('<br>');
print_r('Cidade: ' . $_POST['cidade']);
print_r('<br>');
print_r('Estado: ' . $_POST['estado']);
print_r('<br>');
print_r('Endereço: ' . $_POST['endereco']);
}*/
include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade =$_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result =mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario | Marques</title> 
<link rel="stylesheet" href="./style.css">

</head>

<body>
  <div class="box">
    <form id="form" action="index.php" method= "POST">
      <fieldset>
        <legend><b>Fórmulario de Clientes</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="required inputUser " required oninput="nameValidate()">
          <label for="nome" class="LabelInput">Nome completo</label>
          <span class= "span-required">Nome deve ter no minmo 3 caracteres</span>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser required" required>
          <label for="email" class="LabelInput">Email</label>
        </div>
        <span class= "span-required">Digite um email valido</span>
        <br><br>
        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="required inputUser" required>
          <label for="telefone" class="LabelInput">Telefone</label>
          <span class= "span-required">Digite um numero de telefone valido</span>
        </div>
        <br>
        <p>Sexo:</p>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outro</label>

        <br><br><br>

        <label for="data_nascimento"><b>Data de Nascimento</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento"  required>

        <br><br>

        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser " required>
          <label for="cidade" class="LabelInput">Cidade</b></label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputUser " required>
          <label for="estado" class="LabelInput">Estado</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser " required>
          <label for="endereco" class="LabelInput">Endereço</label>
        </div>
        <br><br>

        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>

<script src="./script.js"></script>
</html>