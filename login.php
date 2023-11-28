<?php

//Verificar se houve uma ação dentro da pagina entrar.php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    // Não esta vazio os campos
    // Conectar o banco de dados

    include_once('conectar.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
}
else{
    // O campo está vazio
    header('Location:entrar.php');
}

    // Verificar a tabela do banco de dados

    $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha' ";
    $verificar = $conexao -> query($sql);

    // Verificar se o registro é valido

    if(mysqli_num_rows($verificar) < 1){

        header('Location:entrar.php');        
    }
    else{
        header('Location:usuario.php');
    }


?>