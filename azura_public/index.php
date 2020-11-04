<!DOCTYPE html>
  <html lang="pt-br">
    <head> 
      <title>Azura Sistemas</title>     
      <!-- META TAGS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="author" content="Gustavo Vaz">
      <meta name="descryption" content="Desenvolvimento de Sistemas web e Tecnologia">
      <meta name="keywords" content="sistemas,web,tecnologia,software,suporte,ti">
      <meta name="robots" content="index,follow">
      <!-- CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- CUSTOM -->
      <link rel="stylesheet" href="css/custom.css"> 
      <!-- ICON MATERIAL -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- FAVICON -->
      <link rel="icon" href="img/icon.png">     
    </head>
    <body>
      <!-- NAVBAR -->
      <div class="navbar-fixed">
      <nav class="purple lighten-2">
          <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"><img class="logo" src="img/logo.png"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#home">Login</a></li>
              <li><a href="#cadastro">Criar conta</a></li>
              <li><a href="#rodape">Contato</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
        </div>
      <!-- SIDENAV -->
        <ul id="slide-out" class="sidenav">                     
           <li><a class="waves-effect sidenav-close" href="#home">Login</a></li>
           <li><a class="waves-effect sidenav-close" href="#cadastro">Criar conta</a></li>
           <li><a class="waves-effect sidenav-close" href="#rodape">Contato</a></li>
         </ul>
      <!-- HOME -->
        <section class="home bloco scrollspy" id="home">
          <div class="row container">
            <div class="col s12 m6 l3">
              <div class="formulario center-align">
                <img class="logo2" src="img/logo-preto.png">
              <form action="login_controller.php?acao=logar" method="post">                     
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="login" type="email" class="validate" name="email">
                  <label for="login">Email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">https</i>
                  <input id="senha" type="password" class="validate" name="senha">
                  <label for="senha">Senha</label>                   
                </div>                               
                <button class="btn waves-effect waves-light purple lighten-2" onclick="M.toast({html: 'Favor digite um email e/ou senha válido(s)!'})">Entrar
                  <i class="material-icons right">send</i>
                </button>              
              </form>
            </div>
            </div>
          </div>
        </section>        
      <!-- CADASTRO -->
        <section class="cadastro cor-fundo1 scrollspy" id="cadastro">
          <div class="row container model">
            <div class="col s12 m6">
              <img src="img/foto.png" class="hide-on-small-only foto-p">
            </div>
            <div class="col s12 m6">
              <h4 class="titulo">Cadastre-se aqui!</h4>
              <form class="formulario" method="post" action="login_controller.php?acao=cadastrar">
                <div class="input-field">
                  <i class="material-icons prefix">account_box</i>                  
                  <input id="nome-reg" type="text" class="validate" name="nome">
                  <label for="nome-reg">Nome*</label>
                </div>                                  
                <div class="input-field">
                  <i class="material-icons prefix">email</i>                  
                  <input id="login-reg" type="email" class="validate" name="email">
                  <label for="login-reg">Email*</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">https</i>                  
                  <input id="senha-reg" type="password" class="validate" name="senha">
                  <label for="senha-reg">Senha*</label>                   
                </div>
                <div class="input-field"> 
                  <i class="material-icons prefix">https</i>                 
                  <input id="conf-senha-reg" type="password" class="validate" name="confirma_senha">
                  <label for="conf-senha-reg">Confirmar senha*</label>
                  <span class="helper-text" data-error="wrong" data-success="right">* Campos obrigatórios</span>                   
                </div>
                <div class="center">                               
                <button class="btn waves-effect waves-light purple lighten-2" onclick="M.toast({html: 'Cadastro efetuado com sucesso!'})" type="submit" name="action">Cadastrar
                  <i class="material-icons right">check</i>
                </button>
                </div>              
              </form>
            </div>
          </div>
        </section>
      <!-- RODAPE -->
        <footer class="rodape cor-fundo2 model scrollspy" id="rodape">
          <div class="row container">            
            <div class="col s12 m3">
              <img src="img/logo.png" class="foto-tam">
              <h6 class="white-text">Azura Sistemas LTDA</h6>
              <p class="white-text">CNPJ: 99.888.000/0001-07</p>                      
            </div>
            <div class="row container">            
            <div class="col s12 m6">              
              <h6 class="white-text">Matriz SP</h6>
              <p class="white-text"> - Av. Paulista n° 2525 9° andar, São Paulo-SP</p>
              <p class="white-text"> - Fone: (11) 2255-2020</p>
              <p class="white-text"> - contato@azurasistemas.com</p><br>
              <h6 class="white-text">Filial PR</h6>
              <p class="white-text"> - Av. XV de novembro n° 25 4° andar, Curitiba-PR</p>
              <p class="white-text"> - Fone: (41) 5562-1000</p>
              <p class="white-text"> - contato.pr@azurasistemas.com</p><br>
              <h6 class="white-text">Central de Suporte Técnico</h6>              
              <p class="white-text"> - Fone: 0800 222 456 2000 </p>
            </div>            
            <div class="col s12 m3">              
              <img src="img/etiqueta1.png" class="foto-tam2">
              <img src="img/etiqueta2.png" class="foto-tam2">
              <img src="img/etiqueta3.png" class="foto-tam2">
            </div>            
          </div>
          <hr class="hr-color">
          <p class="white-text center">Copyright 2020-2025 | Azura Tecnologia e Sistemas</p>
        </footer>         
      <!-- JQUERY -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- JAVASCRIPT -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- JQUERY CODE -->
      <script>        
        $(document).ready(function(){
          //SIDENAV 
            $('.sidenav').sidenav();

          //SCROLLSPY
            $('.scrollspy').scrollSpy({
            scrollOffset:80
            });
          });
      </script>
      <!-- PHP CODE -->
      <!-- TOAST INVÁLIDO -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'invalido'){ ?>      
          <script>
               M.toast({html: 'Favor digite um email e/ou senha válido(s)!'})         
          </script>
      <?php } ?>
      <!-- TOAST CADASTRADO -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'cadastrado'){ ?>      
          <script>
               M.toast({html: 'Cadastro efetuado com sucesso!'})         
          </script>
      <?php } ?>
      <!-- CAMPOS VAZIOS -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'vazio'){ ?>      
          <script>
               alert('Favor preencha todos os campos obrigatórios!*')         
          </script>
      <?php } ?> 
      <!-- CAMPOS OBRIGATÓRIOS -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'diferente'){ ?>      
          <script>
               alert('ERRO: Senhas não confirmam, tente fazer o cadastro novamente!')         
          </script>
      <?php } ?> 
      <!-- USUÁRIO JÁ EXISTE -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'usuario_existe'){ ?>      
          <script>
               alert('ERRO: Email já cadastrado, usuário já possui uma conta ativa!')         
          </script>
      <?php } ?>       
    </body>
  </html>