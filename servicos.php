
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JGTag - Serviços</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo.png">

  <script>
    $(document).ready(function() {

      let trigger = $('.navegacao ul li a'),
        container = $('#inicial');

      trigger.on('click', function(event) {
        event.preventDefault();

        let $this = $(this),
          target = $this.data('target');

        container.load(target + '.php');
      })
    })
  </script>

</head>

<style>
  .pagservicos button:hover {
    background: linear-gradient(-45deg, #CBCAC8, #F0F0F0, #CBCAC8, #F0F0F0);
    background-size: 200% 200%;
    animation: gradient 5s ease infinite;
  }
</style>

<body>

  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slider1.jpg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h2>Missão</h5>
            <p>Proporcionar serviços de desenvolvimento de sistemas para a internet a pequenos negócios, garantindo
              segurança ao seu comércio.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fundo.jpg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h2>Visão</h5>
            <p>Oferecer ao cliente um sistema eficiente, intuitivo e prático, para que o auxilie a administrar seu
              negócio de forma mais efetiva.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fundo2.jpg" class="d-block w-100">
        <div class="carousel-caption d-md-block">
          <h2>Valores</h5>
            <p class="texto_carrossel">Atender as necessidades do cliente, entregando os serviços e produtos com
              qualidade e simplicidade, respeito e acessibilidade.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="pagservicos">
    <h1><i data-feather="credit-card"></i> Nossos serviços</h1>
    <p>Conheça os serviços oferecidos pela nossa empresa:</p>
    <div id="filter-btn-box">
      <button class="main-btn filter-btn" id="serv-btn">Principais serviços</button>
      <button class="main-btn filter-btn" id="fer-btn">Ferramentas</button>
      <button class="main-btn filter-btn" id="orc-btn">Orçamentos</button>
    </div>
    <div class="jgtag-box serv">
      <h2><i data-feather="shopping-bag"></i> Serviços</h2>
      <p><i data-feather="check"></i> Desenvolvimento de sites para pequenos negócios;</p>
      <p><i data-feather="check"></i> Desenvolvimento de sistema de banco de dados;</p>
      <p><i data-feather="check"></i> Manutenção de sites;</p>
      <p><i data-feather="check"></i> Criação e gerenciamento de redes sociais.</p>
    </div>
    <div class="jgtag-box fer">
      <h2><i data-feather="code"></i> Ferramentas</h2>
      <p>As linguagens de programação utilizadas pela nossa empresa são: </p>
      <p><i data-feather="chevron-right"></i> HTML, CSS, JavaScript, PHP e MySQL.</p>
      <p><i data-feather="chevron-right"></i> Utilizamos também programas de edição de foto e vídeo.</p>
    </div>
    <div class="jgtag-box orc">
      <h2><i data-feather="shopping-cart"></i> Orçamentos</h2>
      <p>Todos os nossos orçamentos são feitos através do nosso e-mail:</p>
      <p><i data-feather="at-sign"></i> jgtag.contato@gmail.com</p>
    </div>
  </div>
  
  <footer>
    <div class="infos">
      <div class="row">
        <div class="col-md-6">
          <h2>
            <i data-feather="phone-call"></i> Telefone:
          </h2>
          <p>Gisele Helen - 11 91080-1173</p>
          <p>Juan Manoel Silva - 11 95106-0619</p>
          <p>Thayanne Cristine - 11 94064-7136</p>
          <br>
        </div>
        <div class="col-md-6">
          <h2>
            <i data-feather="map-pin"></i> Endereço:
          </h2>
          <p> Av. Salgado Filho, 3501 - Centro, Guarulhos - SP</p>
          <br>
          <h2>
            <i data-feather="smartphone"></i> Redes Sociais:
          </h2>
          <p>
            <a href="mailto:jgtag.contato@gmail.com"><i data-feather="mail"></i></a>
            <a href="https://instagram.com/jgtag.official?igshid=NDk5N2NlZjQ=" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://github.com/JGTag" target="_blank"><i data-feather="github"></i></a>
          </p>
        </div>
      </div>
      <div>
        <br>
        <h3>&copy; Copiright - 2023 - JGTag</h3>
        <br>
      </div>
    </div>
  </footer>

  <script>
    feather.replace()
  </script>

</body>

</html>