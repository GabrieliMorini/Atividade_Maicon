
<?php
$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_STRING);
$acao = empty($acao) ? 'listar' : $acao; // Padrão será listar
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mercadinho Two Brothers - Seu mercado de confiança">
    <meta name="keywords" content="mercado, produtos, alimentos, mercadinho, compras">
    <meta name="author" content="Mercadinho Two Brothers">
    <title>Mercado Two Brothers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <h1 id="h1Principal">Mercado Two Brothers</h1>
            <nav>
                <ul>
                    <li><a href="?acao=inserir" title="Inserir um novo produto" aria-label="Inserir novo produto">Inserir Produto</a></li>
                    <li><a href="?acao=alterar" title="Alterar produto existente" aria-label="Alterar produto existente">Alterar Produto</a></li>
                    <li><a href="?acao=deletar" title="Deletar um produto" aria-label="Deletar um produto">Deletar Produto</a></li>
                    <li><a href="?acao=listar" title="Listar todos os produtos" aria-label="Listar todos os produtos">Listar Produtos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main id="conteudo">
        <div class="container">
            <section>
                <h2>Bem-vindo ao Mercado Two Brothers!</h2>
                <p>Escolha uma das opções acima para gerenciar seus produtos.</p>
                <?php
                // Inclui o arquivo correspondente à ação
                switch ($acao) {
                    case 'inserir':
                        include 'inserir.php';
                        break;
                    case 'alterar':
                        include 'alterar.php';
                        break;
                    case 'deletar':
                        include 'deletar.php';
                        break;
                    case 'listar':
                    default:
                        include 'listar.php';
                        break;
                }
                ?>
            </section>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Mercado Two Brothers. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
