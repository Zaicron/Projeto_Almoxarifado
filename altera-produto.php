<!DOCTYPE html>
<html>
    <head>
        <title>Almoxarifado - Alterar Cadastro de Produto</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" type="text/css" href="CSS/inicio.css">
        <link rel="stylesheet" href="CSS/alterar-usuario.css">
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
            <div class="titulo-pagina">
                <h2>Alterar Produto</h2>
            </div>
            <div class="container">
            
                <form>
                    <div class="form-input">
                        <input type="text" name="nome" maxlength="50" required autofocus placeholder="Insira o nome do produto:">
                    </div>
                    <div class="form-input">
                        <input type="text" name="quantidade" placeholder="Insira a quantidade:">
                    </div>
                <input type="submit" name="submit" value="Alterar" class="btn-alterar"><br>
                </form>
            
            </div>
            
            
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