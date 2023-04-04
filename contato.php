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
  <title>JGTag - Contato</title>
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

<body>

  <div id="services" class="pag_contato">
    <div class="textinho_contato">
      <h1>Entre em contato conosco</h1>
      <p>Envie alguma dúvida, sugestão ou deixe seu comentário</p>
    </div>
    <div class="container-formulario-contato">
      <div class="formulariocontato">
        <h1>Envie-nos um email</h1>
        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="Nome">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">
          </div>
          <span id="error-email"></span>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Mensagem:</label>
            <textarea rows="3" class="form-control"></textarea>
          </div>
          <div id="text_sumiu">
            <button type="submit" class="botao" onclick="loadDoc()">Enviar</button>
          </div>
        </form>
        <br>
      </div>
    </div>

  </div>

  <script type="text/javascript">
    function validarEmail() {
      var email = document.querySelector('#email');
      var error = document.querySelector('#error-email');

      if (!email.checkValidity()) {
        error.innerHTML = "E-mail inválido";
      }

    }

    function redefinirMsg() {
      var error = document.querySelector('#error-email');
      if (error.innerHTML == "E-mail inválido") {
        error.innerHTML = "";
      }

      $(document).on('submit', '#ctt_form', function() {
        $("input").val("");
        $("textarea").val("");
      });
    }

    function loadDoc() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("text_sumiu").innerHTML =
          this.responseText;
      }
      xhttp.open("GET", "mensagem_cont.php");
      xhttp.send();
    }

    $(document).ready(function() {
      $("#ctt_form").submit(function(event) {
        event.preventDefault();
      });

      $("input").keypress(function(event) {
        if (event.keyCode === 13) {
          event.preventDefault();
          $(this).blur();
        }
      });
    });
  </script>

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