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
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap');

body {
  font-family: 'Roboto', sans-serif;
  background-image: linear-gradient(to right, rgb(192, 37, 223), rgb(122, 9, 187));
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.6);
  padding: 15px;
  border-radius: 15px;
  width: 20%;
  color: white;

}

fieldset {
  border: 3px solid rgb(138, 48, 241);
}

legend {
  text-align: center;
  border: 1px solid rgb(126, 13, 192);
  padding: 10px;
  background-color: rgb(126, 13, 192);
  border-radius: 8px;


}

.inputBox {
  position: relative;

}

.inputUser {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  color: white;
  font-size: 15px;
  width: 100%;
  letter-spacing: 2px;
}

.LabelInput {
  position: absolute;
  top: 0px;
  left: 0px;
  pointer-events: none;
  transition: .5s;
}

.inputUser:focus~.LabelInput,
.inputUser:valid~.LabelInput {
  top: -20px;
  font-size: 12px;
  color: rgb(126, 13, 192);
}

#data_nacimento {
  border: none;
  padding: 8px;
  border-radius: 10px;
  outline: none;
  font-size: 15px;

}

#submit {
  background-image: linear-gradient(to right, rgb(150, 27, 221), rgb(126, 13, 192));
  width: 100%;
  border: none;
  padding: 15px;
  color: white;
  font-size: 15px;
  cursor: pointer;
  border-radius: 10px;

}

#submit:hover {
  background-image: linear-gradient(to right, rgb(126, 13, 192), rgb(91, 0, 114));

}
 </style>
</head>

<body>
  <div class="box">
    <form action="index.php" method= "POST">
      <fieldset>
        <legend><b>Fórmulario de Clientes</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="LabelInput">Nome completo</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" required>
          <label for="email" class="LabelInput">Email</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          <label for="telefone" class="LabelInput">Telefone</label>
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
        <input type="date" name="data_nascimento" id="data_nascimento" required>

        <br><br>

        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade" class="LabelInput">Cidade</b></label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputUser" required>
          <label for="estado" class="LabelInput">Estado</label>
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
          <label for="endereco" class="LabelInput">Endereço</label>
        </div>
        <br><br>

        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>

</html>