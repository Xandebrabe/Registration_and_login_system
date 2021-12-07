<!DOCTYPE html>
<html>
<head>
    <title>Área de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="beautiful.css">
</head>
<body>
    <font face="Arial">
    <?php 
    include("part.php");
    ?>
    <center>
        <h1 style="color: pink"><br/>Cadastre-se</h1>
        <form class="form" method="POST" action="cadastro.php">
            <div class="bx">
                <div class="bx-top" >
                    <img class="imgcad" src="img/luto.jpg">
                    <h2 class="ttl">Área de Cadastro</h2>
                </div>
                <div class=".bx-group">
                    <label>Nome</label>
                    <input type="text" name="nome">
                </div>
                <div class=".bx-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario">
                </div>
                <div class=".bx-group">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div class=".bx-group">
                    <label>Senha</label>
                    <input type="password" name="senha">
                </div>
                <div class=".bx-group">
                    <label>Confirme a senha</label>
                    <input type="password" name="csenha">
                </div>
                <div class=".bx-group">
                    <input type="submit" name="cadastrar" value="Cadastrar">
                </div>

            </div>
                
                    
        </form>
        <h3>Já possui uma conta? Clique <a href="login.php">aqui</a> para fazer login!</h3>
    </center>
    </font>

</body>
</html>