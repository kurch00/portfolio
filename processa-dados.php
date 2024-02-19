
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "portfolio");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO portfolio.dados(nome, email, telefone, mensagem) values('$nome', '$email', '$telefone', '$mensagem')";
        $resultado = mysqli_query($conexao, $sql);

    ?>

    