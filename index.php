<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/082fb10a36.js" crossorigin="anonymous"></script>
    <title>Tec Blog</title>

    <style>
      body{
        font-family: 'Trebuchet MS', 'Helvetica', sans-serif;
        background: #E6E6EC;
      }
      nav#menuPrincipal a.nav-link{
        padding: 10px 20px;
        color: white;
        margin: 0 20px;
        border-radius: 20px;
      }
      nav#menuPrincipal a.nav-link:hover{
        background: white;
        color: black;
      }
      a#logo{
        font-family: 'Fredoka One', cursive;
        font-size: 32px;
      }
      div.container{
        width: 80%;
      }
      div#conteudoPostagens{
        background: white;
        margin-top: 20px;
      }
      div.carousel-inner{
        border-radius: 30px;
      }
      div#carrosselUltimasPostagens h5,
      div#carrosselUltimasPostagens p{
        background: white;
        color: black;
        display: inline-block;
        padding: 2px 20px;
        border-radius: 20px;
        margin: 5px 0;
      }
      form#formPesquisa{
        padding: 5px 0;
      }
      div.caixaPostagens{
        margin-bottom: 25px;
      }
      div.card{
        float: left;
      }
      div.limparFluxo{
        clear: both;
      }
      i#iconUser{
        padding-right: 10px;
      }
      span#subMenuPrincipal a.nav-link{
        color: black;
        margin-right: 0;
      }
      span#subMenuPrincipal a.nav-link:hover{
        color: white;
        background: black;
      }
      @media(max-width: 1100px){
        ul#menuPrincipalLinks{
          margin-left: 30px;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-xl navbar-light bg-primary" id="menuPrincipal">
      <div class="container">
        <a class="navbar-brand" href="index.php" id="logo">TecBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" id="menuPrincipalLinks">
            <li class="nav-item">
              <a class="nav-link" href="#">Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Celulares</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Computadores</a>
            </li>
          
            <form id="formPesquisa" class="d-flex" style="float: right;">
              <input required class="form-control me-2" type="search" name="pesquisa" id="pesquisa" placeholder="pesquise">
              <button class="btn btn-success" type="submit">Pesquisar</button>
            </form>

            <li class="nav-item">
              
            </li>
          </ul>
          <span class="navbar-text" id="subMenuPrincipal">
            <a class="nav-link" href="#"><i class="fas fa-user" id="iconUser"></i>Conta</a>
          </span>
        </div>
      </div>
    </nav>


    <div class="container" id="conteudoPostagens">
      <div id="carrosselUltimasPostagens" class="carousel slide caixaPostagens" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carrosselUltimasPostagens" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carrosselUltimasPostagens" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carrosselUltimasPostagens" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/jogos.jpg" class="d-block w-100" height="450">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5><br>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagens/celulares.jpg" class="d-block w-100" height="450">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5><br>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagens/notebooks.jpg" class="d-block w-100" height="450">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5><br>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselUltimasPostagens" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrosselUltimasPostagens" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      <div class="card caixaPostagens" style="width: 22rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card caixaPostagens" style="width: 22rem; margin: 0 37px;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card caixaPostagens" style="width: 22rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="limparFluxo"></div>



      <div class="card caixaPostagens" style="width: 22rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card caixaPostagens" style="width: 22rem; margin: 0 37px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card caixaPostagens" style="width: 22rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="limparFluxo"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>