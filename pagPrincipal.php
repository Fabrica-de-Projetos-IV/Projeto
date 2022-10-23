<?php
session_start();
//include_once('config.php');
//print_r($_SESSION);
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['usuario'];
//if(!empty($_GET['search']))
//{
//    $data = $_GET['search'];
//    $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
//}
//else
//{
//    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
//}
// $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        nav {
            width: 100%;
            height: 50px;
            margin: 0 auto;
        }

        .center {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 230px;
            width: 100%;
            height: 420px;
        }

        .color {
            background: #1E569A;
        }

        .btn-primary.f {
            background-color: #DE1717 !important;
            border-color: #DE1717 !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary:hover.f {
            background-color: #AE1010 !important;
            border-color: #AE1010 !important;
            color: #fff;
            max-width: 100%;
        }

        .p {
            padding-inline-end: 30px;
            padding-bottom: 0px;
        }

        .btn-primary.e {
            background-color: #1368CE !important;
            border-color: #1368CE !important;
            color: #fff;
            max-width: 100%;
        }

        .btn-primary:hover.e {
            background-color: #1E569A !important;
            border-color: #1E569A !important;
            color: #fff;
            max-width: 100%;
        }

        nav {
            width: 100%;
            height: 67px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light color">
        <a class="navbar-brand"></a>
        <div class="p">
            <a href="sair.php"><button class="btn btn-primary f btn btn-outline">Sair</button></a>
        </div>

    </nav>

    <div class="center">
        <div class="container">
            <div>
                <center>
                    <h3>Saiba&nbsp;qual é o curso de TI ideal para você! Faça o teste e descubra!</h3>
                </center>
            </div>
            <br>
            <div class="">
                <center> <button class="btn btn-primary e" type="submit" name="submit" id="submit">Acessar formulário</button></center>


            </div>
        </div>


        <!--
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>-->

</body>

</html>