<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

$sql = "insert into produtos (nome, quantidade) values ('$nome', '$quantidade')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Almoxarifado</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" type="text/css" href="CSS/inicio.css">
    </head>
    
    <body>
        <h1 class="titulo-principal">Almoxarifado</h1>
        
        <aside class="navegacao-solicitacao">
            <h1 class="titulo-navegacao">Solicitação</h1>
            <nav> 
                <ul>
                    <li><a href="cadastra-requisicao.php"><div class="link">Cadastrar requisição de produto</div></a></li>
                    <li><a href="cadastra-compra.php"><div class="link">Cadastrar requisição de compra</div></a></li>
                    <li><a href="altera-requisicao.php"><div class="link">Alterar requisição de produto</div></a></li>
                    <li><a href="altera-compra.php"><div class="link">Alterar requisição de compra</div></a></li>
                    <li><a href="baixa-produto.php"><div class="link">Baixar requisição de produro</div></a></li>
                    <li><a href="baixa-compra.php"><div class="link">Baixar requisição de compra</div></a></li>
                    <li><a href="inventario.php"><div class="link">Inventario para contagem</div></a></li>
                    <li><div class="link">Informações do Usuario logado</div></li>
                </ul>
            </nav>
        </aside>
        
        <div class="corpo-principal">
                
            <?php
                
                if($linhas == 1){
                    print "Cadastro efetuado com sucesso!";
                }else{
                    print "Cadastro não efetuado. <br> Já existe um produto com o mesmo nome.";
                }
            
            ?>
            
        </div>
        
        <aside class="navegacao-lancamento">
            <h1 class="titulo-navegacao">Lançamento</h1>
            <nav> 
                <ul>
                    <li><a href="cadastra-nf.php"><div class="link">Cadastrar nota fiscal</div></a></li>
                    <li><a href="altera-nf.php"><div class="link">Alterar nota fiscal</div></a></li>
                    <li><a href="cadastra-fornecedor.php"><div class="link">Cadastrar fornecedor</div></a></li>
                    <li><a href="altera-fornecedor.php"><div class="link">Alterar cadastro de fornecedor</div></a></li>
                    <li><a href="cadastra-produto.php"><div class="link">Cadastrar produto</div></a></li>
                    <li><a href="altera-produto.php"><div class="link">Alterar cadastro de produto</div></a></li>
                    <li><a href="cadastra-usuario.php"><div class="link">Cadastrar novo usuario</div></a></li>
                    <li><a href="alterar-usuario.php"><div class="link">Alterar cadastro de usuario</div></a></li>
                    <li><a href="relatorio.php"><div class="link">Relatórios</div></a></li>
                </ul>
            </nav>
        </aside>
        
        <footer class="rodape-pagina">
            &copy; Fortes Company
        </footer>
    </body>
</html>