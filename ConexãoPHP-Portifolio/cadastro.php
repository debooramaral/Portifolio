<?php
    require_once 'usuarios.php';
    $usuario = new Usuarios();
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--icone na navegação da pagina-->
     <link rel="shortcut icon" href="./imgs/person_add_FILL0_wght400_GRAD0_opsz48.png" type="">
     <!--css-->
    <link rel="stylesheet" href="estilo.css">
   
    <title>Cadastro</title>
</head>
<div id="boasvindas">
    <h1> seja bem vindx ☺</h1>
</div>
<body>
    <section class="form-cadastro">
        <div class="tituloform-cadastro">
            <h4>Junte-Se a Mim</h4>
        </div>
        <form method="POST" class="formulario-cadastro">
            <label for="">Usuário</label>
            <input type="text" name="nome" >
            <label for="">E-Mail</label>
            <input type="email" name="email" >
            <label for="">Senha</label>
            <input type="password" name="senha" >
        </form>
        <div class="btn-form-cadastro">
            <button>Cadastrar</button>
        </div>
        <div class="voltar-cadastro">
            <a href="index.php">VOLTAR</a>
        </div>
            
        </div>

        <?php
            if(isset($_POST['nome']))
            {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                //verificar se todos os campos estão preenchidos

                if(!empty($nome) && !empty($email) && !empty($senha))
                {
                    $usuario -> conectar("portifolio", "localhost", "root", "");
                    if($usuario -> msgErro == "") //tudo ok, conectamos!
                    {
                        if($usuario -> cadastrar($nome, $email, $senha))
                        {
                            ?>
                            <div id="msg-sucesso">
                                Cadastrado Com Sucesso!
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div id="msg-sucesso">
                                E-Mail ja Cadastrado
                            </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <div id="msg-sucesso">
                            <?php echo "Erro: ".$usuario -> msgErro ?>
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div id="msg-sucesso">
                        Preencha Todos os Campos
                    </div>
                    <?php
                }
            }
        ?>

    </section>

</body>
</html>