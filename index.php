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


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #1E569A;
            transition: 0.5s;
            /* transição das cores */
        }

        .teste {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        body.active {
            /* transição das cores */
            background: #9E20B2;
        }

        .container {
            position: relative;
            width: 800px;
            height: 500px;
            margin: 20px;
        }

        .blueBg {
            position: absolute;
            top: 40px;
            width: 100%;
            height: 420px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
        }

        .blueBg .box {
            position: relative;
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .blueBg .box h2 {
            color: #fff;
            font-size: 1.2em;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .blueBg .box button {
            cursor: pointer;
            padding: 10px 20px;
            background: #fff;
            color: #333;
            font-size: 16px;
            font-weight: 500;
            border: none;
        }

        .formBx {
            position: absolute;
            top: 0;
            left: 0;
            width: 52%;
            height: 100%;
            background: #fff;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.25);
            transition: 0.5s ease-in-out;
            overflow: hidden;
        }

        .formBx.active {
            left: 50%;
        }

        .formBx .form {
            position: absolute;
            left: 0;
            width: 100%;
            padding: 50px;
            transition: 0.5s;
        }

        .formBx .signinForm {
            transition-delay: 0.25s;
        }

        .formBx.active .signinForm {
            left: -100%;
            transition-delay: 0s;
        }

        .formBx .signupForm {
            left: 100%;
            transition-delay: 0s;
        }

        .formBx.active .signupForm {
            left: 0;
            transition-delay: 0.25s;
        }

        .formBx .form form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .formBx .form form h3 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .formBx .form form input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            outline: none;
            font-size: 16px;
        }

        .border {
            border: 1px solid #333 !important;
        }

        .formBx .form form .forgot {
            color: #333;
            text-decoration: none;
        }

        @media (max-width: 991px) {
            .container {
                max-width: 400px;
                height: 650px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container .blueBg {
                top: 0;
                height: 100%;
            }

            .formBx {
                width: 100%;
                height: 500px;
                top: 0;
                box-shadow: none;
            }

            .blueBg .box {
                position: absolute;
                width: 100%;
                height: 150px;
                bottom: 0;
            }

            .box.signin {
                top: 0;
            }

            .formBx.active {
                left: 0;
                top: 150px;
            }
        }

        nav {
            width: 100%;
            height: 50px;
            margin: 0 auto;
        }

        .form-control:focus.a {
            border-color: #1E569A;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(30, 86, 154, 1);
        }

        .form-control:focus.b {
            border-color: #9E20B2;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(158, 32, 178, 1);
        }

        .btn-primary.a {
            background-color: #1368CE !important;
            border-color: #1368CE !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary:hover.a {
            background-color: #1E569A !important;
            border-color: #1E569A !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary.b {
            background-color: #9E20B2 !important;
            border-color: #9E20B2 !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary:hover.b {
            background-color: #7E1C8D !important;
            border-color: #7E1C8D !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary:hover.c {
            background-color: #1E569A !important;
            border-color: #1E569A !important;
            color: #fff;
        }

        .btn-primary:hover.d {
            background-color: #7E1C8D !important;
            border-color: #7E1C8D !important;
            color: #fff;
        }

        .e {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c {
            width: 130px;
        }

        .d {
            width: 130px;
        }

        div#msg-sucesso {
            width: 400px;
            margin: 10px auto;
            padding: 10px;
            background-color: rgba(50, 205, 50, .3);
            border: 1px solid rgb(34, 139, 34);
        }

        div#msg-erro {
            width: 400px;
            margin: 10px auto;
            padding: 10px;
            background-color: rgba(250, 128, 114, .3);
            border: 1px solid rgb(165, 42, 42);
        }
    </style>
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
            <div id="msg-erro">
                echo "Preencha todos os campos!";
            </div>
    <?php

        }
    }
    ?>

</body>

</html>