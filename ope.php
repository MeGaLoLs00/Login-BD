<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$banco = new PDO('mysql:host=localhost;dbname=Login', 'root','etec');
print "Conexão efetuada com sucesso!<br><br>";
$query = $banco->prepare("SELECT * FROM tbLogin where nmLogin = '$login' and senha = '$senha';");
$query->execute();



if($query->rowCount() > 0)
{
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  header("location:site.php");
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header("location:Login.php");

  }
?>