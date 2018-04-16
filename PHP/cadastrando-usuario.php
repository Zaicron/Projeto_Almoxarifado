<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idEscolhido = filter_input(INPUT_POST, 'id-escolhido', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


echo "nome: $nome <br>";
echo "idEscolhido: $idEscolhido <br>";
echo "senha: $senha <br>";