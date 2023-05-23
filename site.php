<!DOCTYPE html PUBLIC
<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:Login.php');
  }

$logado = $_SESSION['login'];

require_once 'Coockie.php';
$valor = $_COOKIE['usuario'];
print_r($_COOKIE);

?>


<title>SISTEMA WEB</title>
</head>

<body>
<table width="800" height="748" border="1">
  <tr>
    <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEMA</br>
    <?php
  echo" Bem vindo $logado";
  ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">tESTE</td>
    <td width="546">Olaaa</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>