

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top" style="border-radius: 15px gray 2px">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
          <img src="img/logoMalta.png" alt="logo" style="width:10%;">
        </a>
        
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Caso já tenha usuario,</p>
                <p class="description description-primary">por favor use para entrar.</p>
                
            </div>    
           <!-- social media -->
              
            <div class="second-column">
                <h2 class="title title-second">Acessar KROTON</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Utilize seu Usuario para acessar:</p>
                <form action="login.php" method="POST" class="form">
                            <div>
                                <div class="label-input">
                                    <input name="usuario" name="text" class="far fa-envelope icon-modify" placeholder="Seu usuário">
                                </div>
                            </div>
 
                            <div >
                                <div class="label-input">
                                    <input name="senha" class="fas fa-lock icon-modify" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <?php if(isset($_GET['login']) && $_GET['login']=='erro'){?>
                                <div style="color: red;">
                                Usuário ou Senha inválido(s)
                                </div>

                                <?}?>
                            <button type="submit" class= "btn btn-second">Entrar</button>
                        </form>
            </div><!-- segunda coluna -->
        </div><!-- segundo - conteiner -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>