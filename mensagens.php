<?php
    require_once 'processa-dados.php';

    $senha_secreta = "123";

    if($_SERVER["REQUEST_METHOD"]==$_POST){
        $senha_digitada = $_POST['senha'];

        if($senha_digitada===$senha_secreta){
            $sqli = "SELECT * FROM dados";
            $result = $conexao->query($sqli);
        }else{
            echo "<h1>Senha inválida</h1>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">                 
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            <div class="btn-enviar"><a href="index.html"><input type="submit" value="ENVIAR"></a></div>
        </form>

        <div>
            <?php if(isset($result) && $result->num_rows>0) : ?>
                <h2>Mensagens</h2>
                <ul>
                    <?php while($row = $result->fetch_assoc()) : ?>
                        <li>
                            <strong>Nome: </strong> <?php echo $row["nome"]; ?><br>
                            <strong>E-mail: </strong> <?php echo $row["email"]; ?><br>
                            <strong>Telefone: </strong> <?php echo $row["telefone"]; ?><br>
                            <strong>Mensagem: </strong> <?php echo $row["mensagem"]; ?><br>
                        </li>
                    <?php endwhile ?>
                </ul>
                <?php else : ?>
                    <p>Nenhuma mensagem encontrada. </p>
                    <?php endif; ?>
        </div>

    </body>

</html>