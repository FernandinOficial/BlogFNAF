<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO - FNAF</title>

    <style>
        * {
            margin-left: auto;
            margin-right: auto;
        }
        body {
            background-color: rgb(209, 195, 195);
        }

        input {
            width: 35%;
        }

        .field {
            width: 40%;
        }
        
    </style>

</head>
                    <?php
                        $nome = $_POST['nome'];
                        $last = $_POST['last'];
                        $age = $_POST['age'];
                        $nickname = $_POST['nickname'];
                        $foto = $_POST['foto'];
                            
                        // echo $nome;
                        // echo $last;
                        // echo $age;
                        // echo $nickname;
                    ?>
<body>
    <div id="form">
        <form action="dados.php" method="post">
            <fieldset class="field" style="background-color: rgb(189, 189, 189);"><legend><strong><p style="font-size: 25px;">CADASTRO</p></strong></legend>

                <a href="login1.html"><img src="arquivos/voltar.png" alt="Botão Voltar" style="width: 50px;"></a> <!--Imagem "Botao VOLTAR"-->

                <h2>Contato</h2>
                <label for="firstName">
                    <legend>E-mail</legend>
                        <input type="E-mail" placeholder="E-mail" name="email" required>
                </label>

                <br>
                <br>
                <label for="">
                    <legend>Telefone</legend>
                        <input type="text" placeholder="(99) 12345-6789" name="phone" maxlength="11" required>
                </label>
                

                <input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="last" value="<?php echo $last;?>">
                <input type="hidden" name="age" value="<?php echo $age;?>">
                <input type="hidden" name="nickname" value="<?php echo $nickname;?>">
                <input type="hidden" name="foto" value="<?php echo $foto;?>">

                <br>
                <br>
                <label for="button">
                    <input type="submit" value="Enviar" style="background-color: green; float: left;width: 15%;border-radius: 20px;">
                    <input type="reset" value="Apagar" style="background-color: red; float: right;width: 15%;border-radius: 20px;">
                </label>
                
            </fieldset>
        </form>
    </div>
</body>

</html>