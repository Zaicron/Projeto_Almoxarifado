<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "cadastro";

$conexao = mysqli_connect ($servidor, $usuario, $senha, $bancodedados);

if(!$conexao){
    echo "Falha na conexão com o banco de dados.";
}

?>