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
  <title>JGTag - Cadastre-se </title>
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

  <div class="container-formulario2">
    <div class="container-formulario2">
      <div class="formulario2">
        <h1>Cadastrar-se</h1>

        <form action="" id="ctt_form" name="cadastro_form" onsubmit="senhaOK();" method="POST" accept-charset="UTF-8">
          <div class="mb-3 mt-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="" name="nome">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">
          </div>
          <span id="error-email"></span>
          <div class="mb-3 mt-3" id="correto_senha">
            <label for="pwd" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="" name="senha" required onchange='confereSenha();'>
          </div>
          <div class="mb-3 mt-3" id="correto_senha">
            <label for="pwdc" class="form-label">Confirmar senha:</label>
            <input type="password" class="form-control" id="senhac" placeholder="" name="senhac" required onchange='confereSenha();'>
          </div>
          <div id="text_sumiu">
            <button type="submit" class="botao" id="envia" value="Enviar" onclick="loadDoc()">Cadastrar</button>
          </div>
        </form>

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
      });
    }

    function loadDoc() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("text_sumiu").innerHTML =
          this.responseText;
      }
      xhttp.open("GET", "mensagem_signup2.php");
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

    function confereSenha() {
      const senha = document.querySelector('input[name=senha]');
      const senhac = document.querySelector('input[name=senhac]');

      if (senhac.value === senha.value) {
        senhac.setCustomValidity('');
      } else {
        senhac.setCustomValidity('As senhas não conferem');
      }
    }
  </script>

  <script>
    feather.replace()
  </script>

</body>

</html>