<?php


 if(isset($_POST['submit'])){

  //   print_r('UserName: ' . $_POST['usuario']);
  //   print_r('<br>');
  //   print_r('Email: ' . $_POST['email']);
  // }
  
  include_once('config.php');

  $user = $_POST['user'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(user,email,senha) VALUES ('$user','$email','$senha')");

  header('Location: login2.php');
}
?>

<!DOCTYPE html>
<html lang="pt - BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Pedro Piedade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-login">
    <a class="back" href="index.php">Voltar</a>
        <div class="left-login">
            <h1>Pedro Piedade</h1>
            <img src="assets/mechendopcanimação.svg" class="left-login-image" alt="imagem animada">
        </div>
        <form action="cadastro-screen.php" method="POST" id="form">
            <div id="cadastro">
                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastre-se</h1>
                        <div class="textfield">
                            <Label for="users">Usuário</Label>
                            <input name="user" id="user" type="text" class="inputs required" required placeholder="Usuário" oninput="userValidate();">   
                            <span class="span-required">O nome de usuario deve ter ao menos 3 caracteres</span>
                        </div>
                        <div class="textfield">
                            <Label for="e-mail">E-mail</Label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required class="inputs required" oninput="emailValidate();">   
                            <span class="span-required">Digite um e-mail valido</span>
                        </div>
                        <div class="textfield">
                            <Label for="senha">Senha</Label>
                            <input name="senha" id="senha" type="password" placeholder="Senha" required class="inputs required" oninput="mainPasswordValidate();"> 
                            <span class="span-required">A senha deve ter no minimo 8 caracteres</span>  
                        </div>
                        <div class="textfield">
                            <Label for="confirme-senha">Confirme sua Senha</Label>
                            <input name="confirme-senha" id="confirmesenha" type="password" 
                            placeholder="Confirme" required class="inputs required" oninput="comparePassword();">
                            <span class="span-required">As senhas devem ser iguais</span>   
                        </div>
                        <input type="submit" name="submit" class="btn-login" id="cadastrar" value="cadastrar">
                    </div> 
                </div> 
            </div>               
         </form>  
    </div>
    <script src="script.js"></script>
</body> 