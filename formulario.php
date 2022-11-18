<?php
session_start();
include_once('conexao/usuario.php');
//print_r($_SESSION);
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrilhaTech</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="start_btn"><div><button class="btn btn-primary a">Iniciar teste</button></div><div><a href="sair.php"><button class="topb btn btn-primary a">sair</button></a></div></div>
    
    <div class="info_box">
        <div class="info-title"><span>Algumas regras do formulário</span></div>
        <div class="info-list">
            <div class="info">1. Você terá apenas<span> 15 segundos</span> para cada pergunta.</div>
            <div class="info">2. Depois de selecionar sua resposta ela não pode ser desfeita.</div>
            <div class="info">3. Você não pode selecionar alguma opção depois que o tempo acabar.</div>
            <div class="info">4. Você não pode sair do teste enquanto estiver respondendo.</div>
            <div class="info">5. Quando o tempo acabar a pergunta será desconsiderada.</div>
        </div>
        <div class="buttons">
            <button class="quit">Sair</button>
            <button class="restart">Continuar</button>
        </div>
    </div>
    <div class="quiz_box">
        <header>
            <div class="title">TrilhaTech</div>
            <div class="timer">
                <div class="time_left_txt">Tempo</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
            </div>
            <div class="option_list">
            </div>
        </section>
        <footer>
            <div class="total_que">
            </div>
            <button class="next_btn">Próximo</button>
        </footer>
    </div>
    <div class="result_box">
        <div class="icon">
            <i><img src="img/teste3.png" alt=""></i>
        </div>
        <div class="complete_text">Você completou o teste!</div>
        <div class="score_text">
        </div>
        <div class="buttons">
            <button class="resultado quit" >Resultado</button>
            <button class="restart">Refazer</button>
            <a href="formulario.php"><button class="quit">Sair</button></a>
        </div>
    </div>
    <script src="questions.js"></script>
    <script src="script.js"></script>
</body>
</html>
</html>