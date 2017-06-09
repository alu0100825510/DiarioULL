<?php
session_start();

if($_SESSION["USUARIO_NOMBRE"] == ""){
  header('Location: index.html');
}
?>

<html>
<head>
  <!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='150309917-0',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./js/javascript.js"></script>
<link rel="stylesheet" type="text/css" href="./css/contenido.css">

<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
 <link rel="shortcut icon" href="http://icon-icons.com/icons2/317/PNG/512/book-bookmark-icon_34486.png">
 </head>
<body>
<div class="container columnacentral">
  <nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Diario ULL</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="enl-nav"><a href="">Perfil</a></li>
      <li class="enl-nav"><a href="">Soporte</a></li>
      <li class="enl-nav"><a href="logout.php">Salir</a></li>
    </ul>
  </div>
</nav>
<?php
echo "usuario: " . $_SESSION["USUARIO_NOMBRE"];
 ?>

 <div class="col s12">
       <div class="row">
           <header class="col s7 offset-s3">
           </header>
       </div>
 </div>



<div class="row columnacompleta">
  <div class="Asignaturas col m3">
    <h4>Áreas:</h4>
  <ul>
    <li> <a onclick="mostrar(this)" name="cya"> CyA </a></li>
    <li> <a onclick="mostrar(this)" name="estadistica"> Estadística </a></li>
    <li> <a onclick="mostrar(this)" name="uya"> Usabilidad y Accesibilidad </a></li>
    <ul>
    <li> <a onclick="mostrar(this)" name="fiestas"> Fiestas </a></li>
    <li> <a onclick="mostrar(this)" name="incidencias"> Incidencias </a></li>
  </ul>
  </ul>
  </div>


<div class="col m6">
 <div id="contenido" class="col m12">
<p class="Mensaje"> Mensajes: </p>
 </div>
</div>






<div class="col m3 detalles">
  <div class="calendario" >

   <iframe src="https://calendar.google.com/calendar/embed?src=ull.edu.es_dg74co92glk4o9e6i261aqkf8c%40group.calendar.google.com&ctz=Atlantic/Canary" style="border: 0" width="700" height="300" frameborder="0" scrolling="no"></iframe>

  </div>
</div>
</div>



<footer class="page-footer grey darken-3">
    <div class="row">
      <div class="col l6 s12">
        <h4 class="white-text lighten-5 titulo">Diario ULL</h4>
        <p class="white-text text-lighten-4 slogan" > "EL sitio donde tendrás tu día a día"</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <ul>
          <li><a class="white-text lighten-5" href="https://www.ull.es/">Universidad de La Laguna</a></li>
          <li><a class="white-text lighten-5" href="https://campusvirtual.ull.es/">Campus Virtual</a></li>
          <li><a class="white-text lighten-2" href="http://materializecss.com/">Powered by materialize</a></li>
        </ul>
      </div>
    </div>
  <div class="footer-copyright" >
    <h6 class="center-align">© 2017 Copyright Text</h6>
  </div>
</footer>


</div>
</body>
</html>
