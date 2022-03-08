<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://accesscontabilidade.com.br/vagas/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Candidatar - ACCESS CONTABILIDADE</title>

    <!-- Bootstrap core CSS -->
    <link href="https://accesscontabilidade.com.br/vagas/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://accesscontabilidade.com.br/vagas/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://accesscontabilidade.com.br/vagas/assets/css/style.css">
    <link rel="stylesheet" href="https://accesscontabilidade.com.br/vagas/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>ACCESS CONTABILIDADE</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://accesscontabilidade.com.br/vagas/">Início
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="https://accesscontabilidade.com.br/vagas/#vagas">Vagas</a></li>

                <li class="nav-item"><a class="nav-link" href="https://accesscontabilidade.com.br/vagas/about-us.html">Sobre nós</a></li>

           

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="https://accesscontabilidade.com.br/vagas/team.html">Pessoas</a>
                      <a class="dropdown-item" href="https://accesscontabilidade.com.br/vagas/testimonials.html">Testemunhas</a>
                      <a class="dropdown-item" href="https://accesscontabilidade.com.br/vagas/terms.html">Termos</a>
                    </div>
                </li>
                
                <li class="nav-item active"><a class="nav-link" href="https://accesscontabilidade.com.br/contato">Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(https://accesscontabilidade.com.br/vagas/assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
             
              <h2>Envie seu currículo</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


  <div class="send-message">
      <div class="container">
        <div class="row">
            <div class="section-heading">
              <h2>Preencha <strong>TODOS</strong> os campos abaixo e envie.</h2>
            
          </div>
          
            <div class="contact-form">
              <form action="enviar.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input name="vaga" type="text" class="form-control" id="vaga" placeholder="Para qual vaga está se candidatando?" required="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input name="nome" type="text" class="form-control" id="name" placeholder="Nome Completo" required="">
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input name="email" type="text" class="form-control" id="email" placeholder="e-Mail" required="">
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input name="telephone" type="text" class="form-control" id="telephone" placeholder="Telefone" required="">
                    </div>
                    
                    <div class="col-lg-12">
                      <textarea name="resumo" rows="6" class="form-control" id="resumo" placeholder="Escreva um pouco sobre você, suas qualificações, expecialidades, projetos e etc." required=""></textarea>
                    </div>
                    
                    <div class="col-lg-12">
                       <input name="linkedin" type="link" class="form-control" id="linkedin" placeholder="LinkedIn" >
                    </div>
                    
                    <div class="col-lg-12">
                        <label>Anexe seu currículo</label>
                            <input type="file" name="arquivo" class="form-control" id="arquivo" accept=".pdf">
                    </div>
                    
                    <div class="col-lg-12" align="center">
                        <button type="submit" class="filled-button">Enviar candidatura</button>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>


    
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2022 ACCESS CONTABILIDADE - Desenvolvido por: <a href="https://www.approachti.com.br/">APPROACHTI</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="https://accesscontabilidade.com.br/vagas/vendor/jquery/jquery.min.js"></script>
    <script src="https://accesscontabilidade.com.br/vagas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="https://accesscontabilidade.com.br/vagas/assets/js/custom.js"></script>
    <script src="https://accesscontabilidade.com.br/vagas/assets/js/owl.js"></script>
  </body>

</html>
