<html>
    <head>
        <title>  </title>
        <script type="text/javascript">
        function loginsuccessfully(){
            setTimeout("window.location='inicio.php'", 5000);
        }
        function loginfailed(){
            setTimeout("window.location='index.php'", 5000);
        }
        
        </script>
    </head>

    <body>

        <?php

            include_once("conexao.php");

            $nomeusuario = $_POST['nomeusuario'];
            $senha = $_POST['senha'];

            $sql = "select * from usuarios where nomeusuario = '$nomeusuario' and senha = '$senha'";
            $consulta = mysqli_num_rows($sql);

                if($consulta > 0){
                    session_start();
                    $_SESSION['nomeusuario'] = $_POST['nomeusuario'];
                    $_SESSION['senha'] = $_POST['senha'];

                    echo "OK";

                    echo "<script>loginsuccessfully()</script>";

                }else{
                    echo "Nome de Usuario ou senha invalidos.";
                    echo "<script>loginfailed()</script>";
                }

            mysqli_close($conexao);

        ?>

    </body>
    
</html>