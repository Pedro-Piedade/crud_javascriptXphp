<?php
  include_once('config.php');

  if(isset($_POST['update']))
  {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE usuarios SET user = '$user',senha = '$senha',email = '$email' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);

    header('Location: sistema.php');
  }
  else{
    header('Location: sistema.php');
  }
?>