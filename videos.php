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

  <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}  </script>
  <script>    
     jQuery(window).load(function() { 
     $x = $(window).width();    
  if($x > 1024)
  {     
  jQuery("#content .row").preloader();    }      
   jQuery('.magnifier').touchTouch();
     jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')}); 
        }); 
          
  </script>
  </head>

  <body>


<div class="spinner"></div>
<!--============================== header =================================-->
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
        <article class="span12">
        <h3>Vídeos</h3>
         </article>
        <div class="clear"></div>   


         <ul class="thumbnails thumbnails-1 list-services">

               <li class="span6">
             <div class="thumbnail thumbnail-1"> 
                 <section> <iframe width="510" height="350" src="https://www.youtube.com/embed/hhGFX8pYTC0" frameborder="0" allowfullscreen></iframe>  </section>
                  </div>
            </li>
            
            <li class="span6">
            <div class="thumbnail thumbnail-1"> 
                 <section> <iframe width="510" height="350" src="https://www.youtube.com/embed/-wkVTnoVAOA" frameborder="0" allowfullscreen></iframe>  </section>
                  </div>
            </li>

             <li class="span6">
             <div class="thumbnail thumbnail-1"> 
                 <section> <iframe width="510" height="350" src="https://www.youtube.com/embed/LZq4G6cMFl8" frameborder="0" allowfullscreen></iframe>  </section>
                  </div>
            </li>

      
         </ul>
      
      </div>

      
        </div>
  </div>
    </div>

<!--============================== footer =================================-->
<!--============================== footer =================================-->
<footer>
 <?php
include 'php/footer.php';
?>  
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>