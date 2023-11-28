<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Preso Brasil</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logotipo Mercado Preso">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="celular.html">CELULARES</a></li>
                <li><a href="roupa.html">ROUPA</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>

        </nav>

    </header>

    <!--Inicio da contrução da sessão do usuario -->

    <section class="barra_top">
        <div class="barra">
            <h1>Área do usuário</h1>
        </div>

        <div class="barra">
            <a href="index.html">SAIR</a>
        </div>
    </section>

    <section class="usuario">
        <h2>Olá, Nome do Cliente</h2>
        <p>Seja Bem-vindo ao Mercado Preso</p>
    </section>
    
    <!--Inserir os dados do rodapé -->
    <footer>
        <div class="rodape">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="roupas.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
            </ul>
        </div>

        <div class="rodape">
            <p>Rua da Liberdade nº 22 - Bairro Livre</p>
            <p>Diadema - SP - 09870-189</p>
        </div>

        <div class="rodape">
            <p>Siga as nossas Redes sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Mercado Preso"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Mercado Preso"></a>
            <a href="#"><img src="img/youtube.png" alt="YouTube Mercado Preso"></a>
        </div>

    </footer>

    <!--Configurações do JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/cycle.js"></script>

    <!--Configurações do PHP -->
    <?php
        if(isset($_POST['submit'])){
            include_once('conectar.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];

            $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome','$email','$senha','$sexo')");
        }
    
    
    
    ?>



</body>
</html>