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
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie-edge" />
  <link rel="manifest" href="./public/manifest.json">
  <link rel="shortcut icon" href="./public/favicon.ico">
  <title>Incrível Quiz</title>
  <link rel="stylesheet" href="./src/styles/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body id="page-home">

  <div id="loader"></div>
  <!-- start Quiz button -->
  <div class="start_btn">
    <button class="btn" id="button_play">Jogar o Quiz</button>
    <a class="btn" id="button_score" href="sair.php""
        >Sair </a
      >
    </div>

    <!-- Info Box -->
    <div class=" info_box">
      <div class="info-title"><span>Algumas regras deste Quiz</span></div>
      <div class="info-list">
        <div class="info">
          1. Você terá apenas<span> 15 segundos</span> para cada pergunta.
        </div>
        <div class="info">
          2. Depois de selecionar sua resposta não pode ser desfeita.
        </div>
        <div class="info">
          3. Você não pode selecionar opção depois que o tempo acabar.
        </div>
        <div class="info">
          4. Você não pode sair do Quiz enquanto estiver jogando.
        </div>
        <div class="info">5. Você receberá 10 pontos por resposta correta.</div>
      </div>
      <div class="buttons">
        <button class="quit">Sair do Quiz</button>
        <button class="restart">Continuar</button>
      </div>
  </div>
  <!-- Quiz Box -->
  <div class="quiz_box">
    <header>
      <div class="title">Incrível Quiz</div>
      <div class="timer">
        <div class="time_left_txt">Tempo Restante</div>
        <div class="timer_sec">15</div>
      </div>
      <div class="time_line"></div>
    </header>
    <section>
      <div class="que_text">
        <span>aaaaaa</span>
        <!-- Here I've inserted question from JavaScript -->
      </div>
      <div class="option_list">
        <div class="option">
          <span>bbbbbb</span>
        </div>
        <div class="option">
          <span>cccccc</span>
        </div>
        <div class="option">
          <span>ddddddd</span>
        </div>
        <div class="option">
          <span>eeeeeeee</span>
        </div>
        <div class="option">
          <span>fffffffff</span>
        </div>
        <!-- Here I've inserted options from JavaScript -->
      </div>
    </section>
    <!-- footer of Quiz Box -->
    <footer>
      <div class="total_que">
        <span>
          <p>2</p>
          <p>of</p>
          <p>5</p>
          <p>questions</p>
        </span>
        <button>Próxima Questão</button>

        <!-- Here I've inserted Question Count Number from JavaScript -->
      </div>
    </footer>

  </div>
  <!-- Result Box -->
  <div class="result_box">
    <div class="icon">
      <i class="fas fa-crown"></i>
    </div>
    <div class="complete_text">Você completou o Formulário!!</div>
    <div class="score_text">
      <!-- Here I've inserted Score Result from JavaScript -->
    </div>
    <div class="buttons">
      <button class="restart">Resultados</button>
      <button class="quit">Sair do Quiz</button>
    </div>
  </div>
  <!-- Inside this JavaScript file I've inserted Questions and Options only -->
  <!-- Inside this JavaScript file I've coded all Quiz Codes -->
  <script src="./src/javascript/index.js"></script>
</body>

</html>