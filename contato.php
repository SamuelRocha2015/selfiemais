<!DOCTYPE html>
<html lang="pt_BR">
  <head>

<?php include_once("php/head.php") ?>

  
<!--
  <script src="js/forms.js"></script>
  <script>    
   jQuery(window).load(function() { 
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});  
   });      
  </script>-->


  </head>

	<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>

<?php include_once("php/scripts/analyticstracking.php") ?>

<?php
include 'php/header.php';
?>


    </header>
<div class="bg-content"> 
      <!--============================== content =================================-->
      <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
              <h3>Fale conosco</h3>
              <div class="inner-1">
            <form id="contact-form" method="POST" action="php/scripts/enviaMensagem.php">
                  <div class="success">Sua mensagem foi enviada! <strong>Em breve entraremos em contato.</strong> </div>
                  <fieldset>
                <div>
                    <label class="name">
                    <input type="text" placeholder="Seu nome" id="name" name="name">
                  <br>
                    <span class="error">*Informe um nome válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                    </div>
                  <div>
                    <label class="phone">
                    <input type="tel" placeholder="Telefone" id="phone" name="phone">
                    <br>
                    <span class="error">*Informe um número válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                    </div>
                <div>
                    <label class="email">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <br>
                    <span class="error">*Informe um email válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                    </div>
                <div>
                    <label class="date">
                    <input type="date" placeholder="Data do evento" id="date" name="date">
                    <br>
                    </label>
                    </div>
                <div>
                    <label class="message">
                    <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                    <br>
                    <span class="error">*Esta mensagem é muita curta.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                    </div>
                <div class="buttons-wrapper"> 
                  <a class="btn btn-1" data-type="reset">Limpar</a>
                  <a class="btn btn-1" onclick="envia()" data-type="submit">Enviar</a>
                </div>
              </fieldset>
                </form>
          </div>
            </article>
        <article class="span4">
              <h3>Nosso Endereço</h3>
              <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.611507733633!2d-34.90190754986578!3d-8.038927682472538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18f8dfe28735%3A0x82a417ecf0cdb89!2sShopping+ETC!5e0!3m2!1spt-BR!2sbr!4v1483324340981"> </iframe>
          </div>
              <address class="address-1">
          <strong>Av. Conselheiro<br> Rosa e Silva, 1460<br>
               Aflitos - Recife, PE. <br>
               Empresarial Executive Trade Center - ETC.
            </strong>
          <div class="overflow"> 
              <span>Fone/Whatsapp:</span><br />81 30781175 / 81 9.85886047<br>
                <!--<span>Telefone:</span>+1 800 603 6035<br>-->
                <!--<span>Whatsapp:</span>+1 800 889 9898 <br>-->
                <span>E-mail:</span> <a class="mail-1">contato@selfiemais.com.br</a><br>
               <!-- <span>Skype:</span> <a href="#" class="mail-1">@skypename</a></div>-->
          </address>
            </article>
      </div>
        </div>
  </div>
    </div>

<!--============================== footer =================================-->
<footer>
 <?php
include 'php/footer.php';
?>  
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
  
function envia() {


  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;

  if (name == '') {
    alert("Preencha o campo nome.");
  } else if (phone == ''){
     alert("Preencha o campo telefone.");
  } else if (email == ''){
     alert("Preencha o campo email.");
  } else if (message == ''){
     alert("Preencha o campo mensagem.");
  }  else {
    var formulario = document.getElementById('contact-form');
    formulario.submit();
  } 
}

</script>

</body>
</html>