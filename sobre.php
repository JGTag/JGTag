<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JGTag - Sobre nós</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo.png">

  <script>
  $(document).ready(function() {

    let trigger = $('.navegacao ul li a'),
    container = $('#inicial');

    trigger .on('click', function(event){
    event.preventDefault();

    let $this = $(this),
    target = $this.data('target');

    container.load(target + '.php');
    })
  })
  </script>
</head>

<body>

  <div class="pagina_sobre_nos">
    <h1>Sobre nós</h1>
    <p>Está empresa surgiu a partir de uma máteria que temos no nosso curso técnico, com o intuito de formarmos uma
      equipe, nós três nos reunimos e decidindo então qual seria o nome da empresa e a logo, sendo então a logo uma
      referência às iniciais dos nossos nomes, o "J" sendo o cabo do guarda-chuva, "T" o formato do guarda-chuva e "G" a
      ponta do guarda-chuva.</p>

      <a href="#equipe">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-chevron-down chevron">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </a>

  </div>

  <div id="equipe" class="equipe">
    <h1>Conheça a nossa equipe</h1>
    <p></p>
    
    <div class="row">
      <div class="col-xl-4">
        <img id="flip" src="img/gi.jpeg">
        <div id="panel" class="texto_sobre">
        <p>Gisele Helen</p>
        <p>Desenvolvedora Full Strack</p>
        <p>Especialidades: HTML, CSS, PHP, Linux, MySQL e banco de dados</p>
        </div>
      </div>
      <div class="col-xl-4">
        <img id="flip2" src="img/juan.jpeg">
        <div id="panel2" class="texto_sobre">
        <p>Juan Manoel</p>
        <p>Gerente e desenvolvedor Front-end</p>
        <p>Especialidades: HTML, CSS, Linux e MySQL</p>
        </div>
      </div>
      <div class="col-xl-4">
        <img id="flip3" src="img/thay.jpeg">
        <div id="panel3" class="texto_sobre">
        <p>Thayanne Cristine</p>
        <p>Subgerente e desenvolvedora Back-end</p>
        <p>Especialidades: PHP, JavaScript, MySQL e banco de dados</p>
        </div>
      </div>
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
        <h3>&copy;Copiright - 2023 - JGTag</h3>
        <br>
      </div>
    </div>
  </footer>

  <script>
    feather.replace()
  </script>

</body>

</html>