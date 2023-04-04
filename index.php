<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JGTag</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo.png">
  <script>
    $(document).on('click', '.dropdown', function() {
      $(".dropdown-menu").toggle();
    });
  </script>

</head>

<body>
  <header class="menuprincipal">
    <nav class="navegacao">

      <div class="row" class="conjunto_logo">
        <div class="col-sm-8" id="logo">
          <img src="img/logo.png">
        </div>

        <div class="col-sm-8" id="text_jgtag">
          <p>JGTag</p>
        </div>
      </div>

      <div>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a data="inicial.php"  class="nav-link aLink" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a data="sobre.php" class="nav-link aLink" href="#">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a data="servicos.php" class="nav-link aLink" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a  data="contato.php" class="nav-link aLink" href="#">Contato</a>
          </li>
        </ul>
      </div>

      <div class="dropdown me-5">
        <button class="botao-signup" class="row">Sign Up</button>
        <ul class="dropdown-menu ">

          <div class="div-signup">
            <div>
              <li><a data="signup.php" class="nav-link aLink" href="#">Fazer login</a></li>
            </div>
            <div>
              <li><a data="signup2.php" class="nav-link aLink" href="#">Cadastrar-se</a></li>
            </div>
          </div>
          
        </ul>
      </div>
      
    </nav>
  </header>

  <section id="inicial">
   
  </section>

  <script>
    feather.replace()
    
    $(document).ready(function(){
    	$('#inicial').load("inicial.php");


    	// 4º Teste
    	$(".aLink").click(function(event){
			event.preventDefault();
			$('#inicial').load( $(event.target).attr("data") );
    	});
    	
    	
    	 
    });
  </script>

</body>

</html>