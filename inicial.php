<!DOCTYPE html>
<html lang="pt-br">
<script>
    $("#lnkservicos").click(function(event){
      event.preventDefault();
      $('#inicial').load("servicos.php");
        });

        $("#lnkcontato").click(function(event){
      event.preventDefault();
      $('#inicial').load("contato.php");
        });
  </script>
<body>
  <div id="conteudo">

    <div class="boasvindas">
      <h1>Bem vindo a JGTag!</h1>
      <p>Essa empresa foi criada por alunos do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus
        Guarulhos. Temos o objetivo de desenvolver sistemas para a internet que atendam as necessidades dos nossos
        clientes, com muita segurança e qualidade.</p>

        <a href="#services">
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down chevron">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </a>
        
    </div>

    <div class="catalogo">
      <div class="row">
        <div class="col-md-7">
          <div id="services" class="servicos">
            <h1>Serviços</h1>
            <p>Oferecemos serviços acerca de desenvolvimento web para pequenas empresas, utilizando ferramentas como HTML,
              CSS, JavaScript e PHP.</p>
            <p>Gostaria de conhecer mais sobre nossos serviços?</p>
            <button class="botao"><a id="lnkservicos" data="servicos.php" href="#">Saiba mais</a></button>
          </div>
        </div>
        <div class="col-md-5">
          <img class="img-fluid" id="seta1" src="img/browsers.png">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid" id="seta2" src="img/eye.png">
        </div>
        <div class="col-md-7">
          <div class="mvv">
            <h1>Missão, Visão e Valores</h1>
            <p>Sempre visamos atender as necessidades do cliente, entregando os serviços e produtos com qualidade,
              simplicidade, respeito e acessibilidade.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="contato">
            <h1>Contato</h1>
            <p>Gostou da nossa empresa, tem alguma dúvida, gostaria de saber mais ou até então fazer um orçamento?
              Entre em contato conosco!</p>
            <button class="botao"><a id="lnkcontato" data="contato.php" href="#">Saiba mais</a></button>
          </div>
        </div>
        <div class="col-md-5">
          <img class="img-fluid" id="seta1" src="img/message.png">
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
        <h3>&copy; Copiright - 2023 - JGTag</h3>
        <br>
      </div>
    </div>
  </footer>

</body>

</html>