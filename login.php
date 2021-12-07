<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "9420112ca14w18U19zO11#";
    $dbname = "memorialsite";
  
    $connect = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (isset($_POST['login'])) {
    	$Usuário = $_POST['usuario'];
    	$Password = $_POST['senha'];

    	$verificar = mysql_query("SELECT usuario AND senha FROM cadastro WHERE usuario = '$Usuário' AND senha = '$Password'");

    	if (mysql_num_rows($verificar > 0 )) {
    		echo "<h2 style = 'color: yellow'> Login Concluído com sucesso!</h2> ";
    		header("Location: ./");
    	}
    	else{
    		echo "<h2 style = 'color: yellow'> Usuário ou senha inválidos!</h2> ";
    	}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="beautiful.css">
</head>
<body>
	<font face="Arial">
	<?php include("part.php");
	?>
	<center>
		<h1 style="color: pink"><br/>
			Faça o seu login!
		</h1>
		<form method="post" class="form">
			<div class="bx">
                <div class="bx-top" >
                    <img class="imgcad" src="img/luto.jpg">
                    <h2 class="ttl">Área de Login</h2>
                </div>
                <div class=".bx-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario">
                </div>
                
                <div class=".bx-group">
                    <label>Senha</label>
                    <input type="password" name="senha">
                </div>
               
                <div class=".bx-group">
                    <input type="submit" name="login" value="Login">
                </div>

            </div>
		</form>
			<h3>
				Se ainda não tem conta, registre-se <a href="registro.php">aqui.</a>
			</h3>
		</div>
	</center>
    </font>

</body>
</html>