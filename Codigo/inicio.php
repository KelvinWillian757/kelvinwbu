<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/back.css">
    <!--arquivo jquery-->
    <script type="text/javascript" src="JS/inicio.js"></script>

    <title>Página inicial KROTON</title>
    <!--<link rel="icon" href="img/favicon.png">-->
  </head>
  <body>
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top nav-opacity bg-dark" style="opacity: 0.9;">
        <div class="container">
          
          <a href="inicio.php" class="navbar-brand">
            <img src="img/kroton.png" width="142">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">

            <!-- DROPDOWN -->
            <ul class="navbar-nav ml-auto">
              <div class="dropdown">
                <li class="nav-item">

                  <a href="#" class="nav-link">Relatório Gerencial
                    <i class='fas fa-angle-down'></i></a>
                  </a>
                </li>
                
                <div class="dropdown-content">
                  <a class="sub-menu-border" href="acompanhamento_de_resultados.php">Acompanhamento de Resultados</a>
                  
                  <a class="sub-menu-border" href="daily.php">Daily</a>
                  
                  <a class="sub-menu-border" href="acompanhamento_acordos.php">Acompanhamento Acordos</a>
                  
                  <a class="sub-menu-border" href="diario_de_bordo.php">Diário de Bordo</a>
                  
                  <a href="farol_carga_malta.php">Farol Carga - Malta</a>
                </div>
              </div>
              <li class="nav-item divisor"></li>
            
              <li class="nav-item">
                <a href="hora.php" class="nav-link">Hora - Hora</a>
              </li>
              
            

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
              </li>
              <li class="nav-item divisor"></li>
              </li>
              <a href="logout.php" class="nav-link">Sair</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <section id="home" class="d-flex"><!--home -->
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12 capa">
            
            <div id="carousel-spotify" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><!--Inner -->
                
                <div class="carousel-item active">
                  <h1>HORA - HORA</h1>
                  <a href="hora.php" class="btn btn-lg btn-custom btn-roxo">
                    HOJE
                  </a>

                  <a href="hora.php" class="btn btn-lg btn-custom btn-branco">
                    TODOS OS DIAS
                  </a>
                </div>

                <div class="carousel-item">
                  <h1>DASHBOARD</h1>
                  <a href="dashboard.php" class="btn btn-lg btn-custom btn-branco">
                    <i></i> IR agora
                  </a>
                </div>

              </div><!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>

              <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>

            </div>

          </div>
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/home -->

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6">
                <img src="img/branco.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="img/kroton1.png" class="img-fluid">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src="img/maltalogo.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="img/branco.png" class="img-fluid">
              </div>
            </div>
          </div>
          <div id="fade-in-div" class="col-md-6">
            
            <h2>O que tem no portal?</h2>

            <h3>Relatórios operacionais</h3>
            <p>Todos os relatórios que ajuda no bom andamento e entendimento da carteira.</p>

            <h3>Dashboards</h3>
            <p>Dashboards em tempo real para tomada de decisões de imediato.</p>

            <h3>Chat KROTON</h3>
            <p>Chat onde todos que participam do suporte e tomada de decisões possam se ajudar.</p>

          </div>
        </div>
      </div>
    </section>


    <section id="recursos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-4" style="background-color: black; opacity: 0.8;">

            <h2>SCORE</h2>

            <h3>TELEFONES</h3>
            <p>Saiba sempre qual melhor telefone para se abordar.
            </p>

            <h3>CPF</h3>
            <p>Trabalhe apenas clientes que tera grande probabilidade de retorno.
            </p>

            <h3>EMAIL</h3>
            <p>Ultilize o sistema de score para abordar Email-s apenas com grande chance de que o cliente reberá.
            </p>

          </div>
          <div class="col-md-8">
            <div class="row rotacionar">
              <div class="col-md-6">
                <img src="#" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="img/iphone1.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="img/kroton.png" width="142">
          </div>
          <div class="col-md-2">
            <h4>company</h4>
            <ul class="navbar-nav">
              <li><a href="">Malta</a></li>
              <li><a href="">DSB</a></li>
              <li><a href="">Kroton</a></li>
  
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Desenvolvedores</h4>
            <ul class="navbar-nav">
              <li><a href="">Kelvin Willian</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Dados</h4>
            <ul class="navbar-nav">
              <li><a href="">Msuporte</a></li>
              <li><a href="">Daily</a></li>
              <li><a href="">Stage</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>
                
              </li>
          
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>