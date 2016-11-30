<!DOCTYPE html>
<html lang="pt_BR">
	<head>

<?php include_once("php/head.php") ?>

	</head>

	<body>

<?php include_once("php/scripts/analyticstracking.php") ?>

    <div class="spinner"></div> 
    <!--============================== header =================================-->
<header>
<?php
include 'php/header.php';
?>


    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="" > </li>
            <li> <img src="img/slide-2.jpg" alt="" > </li>
            <li> <img src="img/slide-3.jpg" alt="" > </li>
            <li> <img src="img/slide-4.jpg" alt="" > </li>
            <li> <img src="img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Foto Lembrança</h2>
              <div>
            <p>SelfieMais dispõe de serviços de foto lembranças e mini studio em eventos, atendendo aos mais diversos tipos de clientes, tanto pessoas físicas, em eventos sociais como casamentos, formaturas e festas de aniversários, quanto pessoas jurídicas em eventos corporativos.</p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra"><div class="ic"></div>
    <div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
              <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Casamentos</h3>
                <img  src="img/page1-img3.jpg" alt="">
                <section> <strong>Lembrança para casamento</strong>
                <p>As Fotos instantâneas da SelfieMais proporcionam uma criativa lembrança para casamento.</p>
                 <!-- <a href="#" class="btn btn-1">Read More</a> --></section>
              </div>
                </li>

            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Formaturas</h3>
                <img  src="img/page1-img1.jpg" alt="">
                <section> <strong>Foto lembrança para formaturas</strong>
                <p>O baile de formatura é um momento especial, e nada melhor do que uma foto lembrança para registrá-lo de forma divertida.</p>
                     <!--  <a href="#" class="btn btn-1">Read More</a> --></section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Aniversários</h3>
                <img  src="img/page1-img2.jpg" alt="">
                <section> <strong>Uma data especial merece uma lembrança inesquecível</strong>
                <p> O totem de fotos permite a interação, anima e também diverti os convidados durante a festa. </p>
                      <!-- <a href="#" class="btn btn-1">Read More</a> --> </section>
              </div>
                </li>
     
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Confraternizações</h3>
                <img  src="img/page1-img4.jpg" alt="">
                <section> <strong>Alegria e o melhor preço para seu evento</strong>
                <p>A selfieMais oferece para a sua empresa o serviço e o preço, que mais se adequam a sua necessidade e ao seu evento.</p>
                  <!-- <a href="#" class="btn btn-1">Read More</a> --></section>
              </div>
                </li>
          </ul>
            </div>
      </div>
        </div>
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3>Saiba Mais</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="img/page1-img5.jpg " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">A selfiemais faz fotos instantâneas e personalizadas, uma recordação inesquecível de um grande dia.</div>
                Provida sempre de alta tecnologia e design moderno, atua na Região metropolitana do Recife, e é uma ótima opção para qualquer tipo de evento, seja ele: Casamento, formaturas, aniversários, confraternizações, eventos coorporativos e outros.
                  <div class="border-horiz"></div>
                  <div class="overflow">
                <ul class="list list-pad">
                      <li><a href="#">Casamentos</a></li>
                      <li><a href="#">Aniversários</a></li>
                      <li><a href="#">Confraternizações</a></li>
                      
                      
                    </ul>
                <ul class="list">
                     <li><a href="#">Formaturas</a></li>
                      <li><a href="#">Eventos corporativos</a></li>
                    
                    </ul>
              </div>
                </div>
          </div>
            </article>
              <article class="span6">
              <h3>Curta SelfieMais</h3>
             
              <div class="fb-page" data-href="https://www.facebook.com/selfiemaisoficial/" data-width="850" data-height="1000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/selfiemaisoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/selfiemaisoficial/">SelfieMais</a></blockquote></div>

            
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=638918389607547";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>