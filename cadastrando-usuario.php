<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "cadastro-usuario";
$conexao = mysqli_connect ($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($banco) or die (mysqli_error());

?>
<?php

$nome        = $_POST['nome'];
$idEscolhido = $_POST['idEscolhido'];
$senha       = $_POST['senha'];
$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, idEscolhido, senha)
VALUES('$nome', '$idEscolhido','$senha')");

if($insereDados):
   echo "<p>Cadastro feito com sucesso</p>";
else:
   echo "opa.. algo deu errado :( ";
endif;

?>