<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao/usuario.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

         //print_r('Email: ' . $usuario);
         //print_r('<br>');
         //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tab_usuarios WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

         //print_r($sql);
         //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: pagPrincipal.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
    

?>