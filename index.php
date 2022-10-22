<!DOCTYPE html>

<?php
require_once 'conexao/usuario.php';
$u = new Usuario;
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <a href="landingPage.php"><img class="rounded-circle" src="img/bola3.png" alt="image"></a>  

        </div>
        </div>
    </nav>
    <div class="teste">
        <div class="container">

            <div class="blueBg">
                <div class="box signin">
                    <h2>Já tem uma conta?</h2>
                    <button type="submit" name="submit" class="btn btn-primary d signinBtn">Login</button>
                </div>
                <div class="box signup">
                    <h2>Não tem uma conta?</h2>
                    <button class="btn btn-primary c signupBtn">Cadastre-se</button>
                </div>
            </div>
            <div class="formBx ">
                <div class="form signinForm" id="corpo-form">
                <form action="testLogin.php" method="POST">
                        <h3>Login</h3>
                        <input class="form-control border a" type="text" name="usuario" placeholder="Usuario..." />
                        <input class="form-control border a" type="password" name="senha" placeholder="Senha..." />
                        <button class="btn btn-primary a inputSubmit" name="submit" type="submit">Entrar</button>
                        <br>
                        <a href="#" class="forgot">Esqueci minha senha</a>
                    </form>
                </div>
                <div class="form signupForm" id="corpo-form-cad">
                    <form method="POST">
                        <h3>Cadastro</h3>
                        <input class="form-control border b" type="text" name="nome" placeholder="Nome..." maxlength=30 />
                        <input class="form-control border b" type="text" name="usuario" placeholder="Usuario..." maxlength=40 />
                        <input class="form-control border b" type="text" name="email" placeholder="E-mail..." maxlength=40 />
                        <input class="form-control border b" type="text" name="senha" placeholder="Senha..." maxlength=15 />
                        <input class="form-control border b" type="text" name="confSenha" placeholder="Confirmar senha" maxlength=15 />
                        <button class="btn btn-primary b" type="submit" name="submit" id="submit">Cadastrar</button>

                </div>
                <br>

                </form>
            </div>
        </div>
    </div>
    </div>


    <script>
        const signinBtn = document.querySelector(".signinBtn");
        const signupBtn = document.querySelector(".signupBtn");
        const formBx = document.querySelector(".formBx");
        const body = document.querySelector("body");

        signupBtn.onclick = function() {
            formBx.classList.add("active");
            body.classList.add("active");
        };

        signinBtn.onclick = function() {
            formBx.classList.remove("active");
            body.classList.remove("active");
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <?php
    if (isset($_POST['submit'])) {
        $nome = addslashes($_POST['nome']);
        $usuario = addslashes($_POST['usuario']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);

        if (!empty($nome) && !empty($usuario) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {


            if ($u->msgErro == "") {
                if ($senha == $confirmarSenha) {
                    $result = mysqli_query($conexao, "INSERT INTO tab_usuarios(nome,usuario,email,senha) 
                    VALUES ('$nome','$usuario','$email','$senha')");
    ?>
                    <div id="msg-sucesso">
                        echo "Usuário cadastrado com sucesso!";
                    </div>
                <?php
                } else {
                ?>
                    <div class="msg-erro">
                        echo "As senhas não coincidem!";
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
                    echo "Erro: " . $u->msgErro;;
                </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                echo "Preencha todos os campos!";
            </div>
    <?php

        }
    }
    ?>

</body>

</html>