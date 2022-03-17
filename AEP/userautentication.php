<meta charset="UTF-8">

<?php include "dashboard/banco.php"; ?>
    <?php
    session_start();
    $user = $_POST['user'];
	$senha = $_POST['senha'];
    $sql = mysql_query("SELECT * FROM usuario WHERE usuario = '$user' and senha = '$senha'") or die(mysql_error());
    $row = mysql_num_rows($sql);
    if ($row > 0) {
		
		  $_SESSION['user'] = $user;
		  $_SESSION['senha'] = $senha;
		  unset($_SESSION['erro']);
		  header("location:dashboard/template.php");
          
} else {
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    $_SESSION['erro'] = "<center><p>Login ou senha incorretos !!!<center></p>";
    header('location:index.php');
    exit();
    }
?>

