<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento - FNAF Blog</title>

    <style>
        * {
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>
    <a href="index.html">  
        <fieldset style="width: 40%; margin-left: auto;margin-right: auto;margin-top: 5%;background-color: rgb(22, 197, 22); text-align: center;">
            <h1>Muito obrigado por se Cadastrar</h1>
            <p>clique aqui</p>
        </fieldset>
    </a>
    <?php
        $nome = $_POST['nome'];
        $last = $_POST['last'];
        $age = $_POST['age'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $foto = $_POST['foto'];

        echo '<h3><strong>Nome:</strong></h3>';
        echo $nome;
        echo '<h3><strong>Sobrenome:</strong></h3>';
        echo $last;
        echo '<h3><strong>Idade:</strong></h3>';
        echo $age;
        echo '<h3><strong>NickName:</strong></h3>';
        echo $nickname;  
        echo '<h3><strong>E-mail:</strong></h3>'; 
        echo $email;
        echo '<h3><strong>Telefone:</strong></h3>';
        echo $tel;
        echo '<h3><strong>Foto:</strong></h3>';
        echo '<img src="' . $foto . '">';
    ?>
</body>
</html>