<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "Descrição do meu site fica aqui limitada a 156 caracteres"/>
    <link rel="stylesheet" type="text/css" href="css/hora-a-hora.css" />
    <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
    <!-- Latest compiled and minified CSS (Bootstrap) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
 <link rel="stylesheet" type="text/css" href="css/back.css">
        <!--arquivo jquery-->
        <script type="text/javascript" src="JS/inicio.js"></script>

    <title>Hora a hora</title>

</head>
<body>
       
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
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
 
<!--Tabela 1-->
<table  class="mb-5 tabela" border="3px" style="margin-top: 7%;">
    <!--linha 1-->
    <tr class="primeira-linha" > 
        <b>  
            <td style="width: 10%;">Carteira</td>
            <td colspan="2" style="width: 50%;">Informações Gerais</td>
            <td>00h00-07h59</td>
            <td>08h00-08h59</td>
            <td>09h00-09h59</td>
            <td>10h00-10h59</td>
            <td>11h00-11h59</td>
            <td>12h00-12h59</td>
            <td>13h00-13h59</td>
            <td>14h00-14h59</td>
            <td>15h00-15h59</td>
            <td>16h00-16h59</td>
            <td>17h00-17h59</td>
            <td>18h00-18h59</td>
            <td>19h00-19h59</td>
            <td>20h00-20h59</td>
            <td>21h00-21h59</td>
            <td>22h00-22h59</td>
        </b>
    </tr>
    
        <!--linha 2-->
    <tr  class="item-tabela-claro">
        <td class="item-tabela" rowspan="12">560- kroton<br>  Inativos</td>
        <td class="item-tabela item-half" >#Acessos</td>
        <td class="item-tabela item-half"  >Soma:   |Media:</td>
        <td>23</td>
        <td>23</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
        <td>57</td>
        <td>42</td>
        <td>23</td>
        <td>23</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
        <td>13</td>
    </tr>

            <!--linha 3-->
            <tr class="item-tabela-claro">
                <td class="item-tabela" >#CPC</td>
                <td class="item-tabela" >Soma:   |Media:</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

             <!--linha 4-->
             <tr class="item-tabela-claro">
                <td class="item-tabela" >#CPC'I</td>
                <td class="item-tabela" >Soma:   |Media:</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

             <!--linha 5-->
             <tr class="item-tabela-claro">
                <td class="item-tabela" >#CPC'A</td>
                <td class="item-tabela" >Soma:   |Media:</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

             <!--linha 6-->
             <tr class="item-tabela-claro">
                <td class="item-tabela" >Acordos</td>
                <td class="item-tabela" >Soma:   |Media:</td>
                <td >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

             <!--linha 7-->
             <tr class="item-tabela-claro">
                <td class="item-tabela" >%Localizacao [cpc/acessos]</td>
                <td class="item-tabela" >65,44%</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

             <!--linha 8-->
             <tr class="item-tabela-claro">
                <td class="item-tabela" >$Formalizado</td>
                <td class="item-tabela" >R$ 56,00</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

            <!--linha 9-->
            <tr class="item-tabela-claro">
                <td class="item-tabela" >$ Meta</td>
                <td class="item-tabela" >R$155,00</td>
                <td >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

            <!--linha 10-->
            <tr class="item-tabela-claro">
                <td class="item-tabela" >Atingimento de meta</td>
                <td class="item-tabela" >49%</td>
                <td  >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

            <!--linha 11-->
            <tr class="item-tabela-claro">
                <td class="item-tabela" >$ Meta dia</td>
                <td class="item-tabela" >R$155,00</td>
                <td >23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>57</td>
                <td>42</td>
                <td>23</td>
                <td>23</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
                <td>13</td>
            </tr>

            <!--linha 12-->
            <tr class="item-tabela-claro">
                <td class="item-tabela" >$ Projeção Linear</td>
                <td class="item-tabela" >R$35,000</td>
            </tr>

            <!--linha 13-->
            <tr class="item-tabela-claro" >
                <td class="item-tabela" >$ Projeção linear <br>Ponderada</td>
                <td class="item-tabela" >R$ 71.000,00</td>
            </tr>


            
          
 
     <!--tabela 2-->
     <!---->
     <!---->
     <!---->
     <!---->

    <b>
     <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
        
        </b>
    </tr>
     <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            
        </b>
    </tr>
    </b>

     <tr class="primeira-linha" > 
        <b>  
            <td class="none"></td>
            <td colspan="2" class="none" ></td>
            <td>00h00-07h59</td>
            <td>08h00-08h59</td>
            <td>09h00-09h59</td>
            <td>10h00-10h59</td>
            <td>11h00-11h59</td>
            <td>12h00-12h59</td>
            <td>13h00-13h59</td>
            <td>14h00-14h59</td>
            <td>15h00-15h59</td>
            <td>16h00-16h59</td>
            <td>17h00-17h59</td>
            <td>18h00-18h59</td>
            <td>19h00-19h59</td>
            <td>20h00-20h59</td>
            <td>21h00-21h59</td>
            <td>22h00-22h59</td>
        </b>
    </tr>

         <!--linha 1-->
        <tr class="item-tabela-claro">
            <td rowspan="5" class="item-tabela" >SMS</td>
            <td class="item-tabela">#Envios</td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

         <!--linha 2-->
         <tr class="item-tabela-claro">
            <td class="item-tabela">#Acessos</td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 3-->
        <tr class="item-tabela-claro">
            <td class="item-tabela">#Acordos</td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 4-->
        <tr class="item-tabela-claro">
            <td class="item-tabela">% Retorno [CPC/Envios]</td>
            <td class="item-tabela">1238%</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 5-->
        <tr class="item-tabela-claro">
            <td class="item-tabela">% Retorno [Acordos/ ENvios]</td>
            <td class="item-tabela">0,034%</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        


    <!--tabela 3-->
    <!---->
     <!---->
     <!---->
     <!---->
    
        <!--linha 1-->
        <tr class="item-tabela-claro">
            <td rowspan="5" class="item-tabela">E-mails</td>
            <td class="item-tabela">#Envios </td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

         <!--linha 2-->
         <tr class="item-tabela-claro">
            <td class="item-tabela"># Acessos</td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 3-->
        <tr class="item-tabela-claro">
            <td class="item-tabela"># Acordos</td>
            <td class="item-tabela">Soma:   |Media:</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 4-->
        <tr class="item-tabela-claro">
            <td class="item-tabela">% Retorno [CPC/Envios]</td>
            <td class="item-tabela">0,802%</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

        <!--linha 5-->
        <tr class="item-tabela-claro">
            <td class="item-tabela">% Retorno [Acordos/ ENvios]</td>
            <td class="item-tabela">0,022%</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>57</td>
            <td>42</td>
            <td>23</td>
            <td>23</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
            <td>13</td>
        </tr>

    </table>  
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

</body>
</html>

