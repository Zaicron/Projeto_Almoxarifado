<!DOCTYPE html>
<html>
    <head>
        <title>Almoxarifado - Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/login.css">
    </head>
    <body>
        <div class="container">
            <img src="img/icone.png">
            <form method="post" action="autenticar.php">
                <div class="form-input">
                    <input type="text" name="nomeusuario" placeholder="Insira seu usuario">
                </div>
                <div class="form-input">
                    <input type="password" name="senha" placeholder="Insira sua senha">
                </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login"><br>
                <a href="#">Esqueceu sua senha ?</a>
            </form>
        </div>
    </body>
</html>