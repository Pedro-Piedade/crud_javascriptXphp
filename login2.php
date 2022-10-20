<!DOCTYPE html>
<html lang="pt - BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pedro Piedade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="main-login">
    <a class="back" href="index.php">Voltar</a>
        <div class="left-login">
            <h1>Pedro Piedade</h1>
            <img src="assets/mechendopcanimação.svg" class="left-login-image" alt="imagem animada">
        </div>
        <div>
            <form action="testLogin.php" method="POST" id="form"> 
                <div class="right-login">
                    <div class="card-login">
                        <h1>Login</h1>
                        <div class="textfield">
                            <Label for="usuario">Usuário</Label>
                            <input name="user" id="usuario" type="text" placeholder="Usuário">   
                        </div>
                        <div class="textfield">
                            <Label for="senha">Senha</Label>
                            <input name="senha" id="senha" type="password" placeholder="Senha">   
                        </div>
                        <input type="submit" name="submit" class="btn-login" value="login">
                    </div>         
                </div>
            </form>  
        </div>
</body>
<script src="script2.js"></script>
</html>