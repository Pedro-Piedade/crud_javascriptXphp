<?php

 if(!empty($_GET['id'])){

   include_once('config.php');

   $id = $_GET['id'];

   $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";

   $result = $conexao->query($sqlSelect);

   if($result->num_rows > 0){  
        while( $user_data = mysqli_fetch_assoc($result)){
          $user = $user_data['user'];
          $email = $user_data['email'];
          $senha = $user_data['senha'];
        }
        // print_r($user);
   }
   else{
    header('Location: sistema.php');
   }
}
else{
    header('Location: sistema.php');
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="main-login">
    <a class="back" href="sistema.php">Voltar</a>
            <div class="left-login">
                <h1>Pedro Piedade</h1>
                <img src="assets/mechendopcanimação.svg" class="left-login-image" alt="imagem animada">
            </div>
        <form action="saveEdit.php" method="POST" id="form">
            <div id="cadastro">
                <div class="right-login">
                    <div class="card-login">
                        <h1>Edite </h1>
                        <div class="textfield">
                        <Label for="users">Usuário</Label>
                        <input name="user" type="text" class="inputs required" placeholder="Usuário" value="<?php echo $user ?>" oninput="userValidate();">   
                        <span class="span-required">O nome de usuario deve ter ao menos 3 caracteres</span>
                    </div>
                    <div class="textfield">
                        <Label for="e-mail">E-mail</Label>
                        <input id="e-mail" type="email" name="email" placeholder="Digite seu e-mail" class="inputs required" value="<?php echo $email ?>" oninput="emailValidate();">   
                        <span class="span-required">Digite um e-mail valido</span>
                    </div>
                    <div class="textfield">
                        <Label for="senha">Senha</Label>
                        <input name="senha" id="senha" type="text" placeholder="Senha" class="inputs required" value="<?php echo $senha ?>" oninput="mainPasswordValidate();"> 
                        <span class="span-required">A senha deve ter no minimo 8 caracteres</span>  
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update" class="btn-login" value="salvar edição">
                </div> 
            </div>            
        </form>  
    </div>
      <!-- <script src="script.js"></script> -->
  </body> 