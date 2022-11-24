<!DOCTYPE html>

<?php
require_once 'conexao/usuario.php';
$u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TrilhaTech </title>

    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="fonts/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>

    <header id="header-wrap">
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.php" class="navbar-brand"><img src="img/logob.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Página inicial
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Serviços
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Equipe
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Depoimentos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contato
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">Trilha Tech,<br>Te colocamos nos <br> trilhos da tecnologia!</h2>
                <p class="p">Não sabe qual área escolher ? <br>Necessita de alguma dica pra trilhar seu futuro ? </p>
                <div class="header-button">
                  <a href="login.php" class="btn btn-primary a">Faça nosso formulário</i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="img/a10.png" alt="">
              </div>      
            </div>
          </div> 
        </div> 
      </div>

    </header>
  
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nossos Serviços</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Formulário rapido</a></h3>
                <p class="p">Nosso site desponibilizará uma alta perfomance de usabilidade e rapidez para efetuar o formulário.  </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-stats-up"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Design Intuitivo</a></h3>
                <p>Com design limpo e bonito para o usuário ter uma maior satisfação e uma boa experiência ao efetuar o formulário. </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Cadastro seguro</a></h3>
                <p>Ao efetuar o cadastro seus dados estarão seguros, garantimos a proteção de suas informações.  </p>
              </div>
            </div>
          </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
              <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                <div class="icon">
                  <i class="lni-mobile"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Feedback</a></h3>
                  <p>Avalie nossos serviços, nos conte sobre sua experiência e deixe um feedback. </p>
                </div>
              </div>
            </div>

          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Descubra sua vocação</a></h3>
                <p>Efetue o questionario, e descubra sua vocação em menos de 5 minutos.  </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Foco no cliente</a></h3>
                <p>Entender as necessidades e desejos do cliente e fornecer aquilo que ele procura. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  
                  <h2 class="section-title">Quem somos ?</h2>
                </div>
                <div class="content">
                  <p>
                  Somos uma equipe inovadora com o objetivo de direcionar pessoas que desejam entrar no ramo da tecnologia e não sabem em que cargo se encaixam. Nosso diferencial é oferecer algo totalmente direcionado para área de TI, podendo ter um resultado mais assertivo.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <img class="img-fluid" src="img/a3.png" alt="" >
          </div>
        </div>
      </div>
    </div>

    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Conheça nosso time</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">

          <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="https://avatars.githubusercontent.com/u/82041364?v=4" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a >Jackeline Lemos</a></h3>
                  <p>Product Owner</p>
                </div>
                <p>Sou a responsável por representar interesses dos Stakeholders, priorizando o Product Backlog.</p>
                <ul class="social-icons">
                  <li><a href="https://www.linkedin.com/in/jackeline-lemos-de-jesus-9915561b4/"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="https://github.com/JackelineLemos"><i class="lni lni-github" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/_lemosjack/"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">

          <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="https://avatars.githubusercontent.com/u/92065476?v=4" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a >Luiz Ageo</a></h3>
                  <p>Scrum Master</p>
                </div>
                <p>Sou o responsável por garantir que o Time Scrum se oriente pelos valores e práticas do Scrum.</p>
                <ul class="social-icons">
                  <li><a href="https://www.linkedin.com/in/luiz-ag%C3%AAo-68442a225/"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="https://github.com/AgeoBrito"><i class="lni lni-github" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/ageobrito/"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">

          <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="https://avatars.githubusercontent.com/u/84162653?v=4" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a >Mateus de Queiroz</a></h3>
                  <p>Tester</p>
                </div>
                <p>Sou o responsável por verificar se um sistema está rodando conforme o esperado.</p>
                <ul class="social-icons">
                  <li><a href="https://www.linkedin.com/in/mateus-queiroz-davidson96/"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="https://github.com/MQueirozD"><i class="lni lni-github" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/m_queirozz/"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">

          <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
              <div class="team-img">
                <img class="img-fluid" src="https://avatars.githubusercontent.com/u/92065269?v=4" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a >Lucas Vieira</a></h3>
                  <p>Desenvolvedor</p>
                </div>
                <p>sou o responsável pela programação, que é o processo de escrita e o desenvolvimento do projeto.</p>
                <ul class="social-icons">
                  <li><a href="https://www.linkedin.com/in/luucas-vieira/"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="https://github.com/LucasVieira1"><i class="lni lni-github" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/vieiralucass/"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
          
          <div class="col-lg-6 col-md-12 col-xs-12">

          <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="img/team/a.jpg" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a >Samuel Santos</a></h3>
                  <p>Desenvolvedor</p>
                </div>
                <p>sou o responsável pela programação, que é o processo de escrita e o desenvolvimento do projeto.</p>
                <ul class="social-icons">
                  <li><a href="https://www.linkedin.com/in/samuel-santoss/"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="https://github.com/Sam-Pina"><i class="lni lni-github" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/samukaz_/"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
         
    </section>

    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="img/user.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a >Nome</a></h2>
                    <h3><a >Profissão</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Texto.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="img/user.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a >Nome</a></h2>
                    <h3><a >Profissão</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Texto.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="img/user.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a >Nome</a></h2>
                    <h3><a >Profissão</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">
                    Texto.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>    
                      <span><i class="lni-star-filled"></i></span>    
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="img/user.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a >Nome</a></h2>
                    <h3><a >Profissão</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Texto.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>                      
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contate-nos</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form  method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required data-error="Por favor insira seu nome">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" placeholder="Email" id="email" class="form-control" name="email" required data-error="Por favor insira seu email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Sua Mensagem" rows="7" data-error="Deixe sua Mensagem" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-left">
                      <button class="btn btn-primary b" name="submit" id="submit"  type="submit">Enviar Mensagem</button>
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
              <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117098.01988416728!2d-47.53132150287521!3d-23.48507882652075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf5fe2a6c6f25d%3A0xd970be85f3c967da!2sFACENS!5e0!3m2!1spt-BR!2sbd!4v1634949419963!5m2!1spt-BR!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></object>
            </div>
          </div> 
        </div>
      </div> 
    </section>

    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="footer-logo"><img src="img/testelogo2.png" alt=""></h3>
                          
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Áreas</h3>
              <ul class="footer-link">
                <li><a href="#">Desenvolvimento</a></li>
                <li><a href="#">Redes</a></li> 
                <li><a href="#">Testes</a></li>
                <li><a href="#">Gerenciamento de projetos</a></li>
                <li><a href="#">Analista de dados</a></li>           
                     
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Recursos</h3>
              <ul class="footer-link">
                <li><a href="#">Login e Cadastro</a></li>
                <li><a href="#">Questionário</a></li>
                <li><a href="#">Visualização dos resultados</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contato</h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i>Sorocaba - SP</a>
                   
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> Tel: +55 123 123 123</a>
                </li>
                <li>
                  <a href="#"><i class="lni-envelope"></i> E-mail: trilhatech@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 

    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>

    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>  
    <script src="js/main.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.min.js"></script>

    <?php
    if (isset($_POST['submit'])) {
        $nome = addslashes($_POST['nome']);
        $usuario = addslashes($_POST['email']);
        $email = addslashes($_POST['mensagem']);



            if ($u->msgErro == "") {
                    $result = mysqli_query($conexao, "INSERT INTO tab_contato(nome,email,mensagem) 
                    VALUES ('$nome','$usuario','$email')");
    ?>
                    <div id="msg-sucesso" class="fixed-top">
                       mensagem enviada com sucesso!
                    </div>
                <?php
                
            } else {
                ?>
                <div class="msg-erro fixed-top">
                    Erro!
                </div>
            <?php
            }
    
    }
    ?>
      
  </body>
</html>
