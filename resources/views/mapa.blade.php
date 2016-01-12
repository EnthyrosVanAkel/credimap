<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Credimap | Campus Party</title>
        <meta name="description" content="Proyecto para el concurso de Campus Party y PRONAFIM creado por Vladimir Galicia y Mario Ortega" />
        <meta name="keywords" content="campus party,pronafim, microfinanciamiento, empresario, financiamiento, negocios, recursos, fondo, apoyo, iniciativas, secretaria de economia, economia, gobierno federal, apoyar, bajos ingresos, ingresos, empleo, oportunidades de negocio, mexicanas, mexicanos, inversion, desarrolladas, mexico, habilidades empresariales basicas, empresariales, programa nacional, microempresario, marginacion" />
        <meta name="author" content="Vladimir" />
        <link rel="shortcut icon" type="image/x-icon" href="http://www.pronafim.gob.mx/static/img/favicon.ico">

        <link rel="stylesheet" type="text/css" href="/credimap/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/credimap/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/credimap/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="/credimap/css/style3.css" />
        <script src="/credimap/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  
        <script src="/credimap/js/gmaps.js"></script>


<style type="text/css">
    #mapa {
      width: 100%;
      height: 100%;
    }
  </style>

    </head>
    <body>

    <div id="mapa" style="position: absolute; background-color: rgb(229, 227, 223);">
    </div>

    <div class="container">
        <div>nosdfn</div>
            <nav id="bt-menu" class="bt-menu">
                <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
                <ul>
                    <li><a href="#" class="bt-icon icon-user-outline">Credi-Mapa</a></li>
                    <li>.</li>
                    <li><</li>
                    <li>></li>
                    <li><a href="#" class="bt-icon icon-star">.</a></li>
                    <li><a href="#" class="bt-icon icon-bubble">Calculadora</a></li>
                </ul>
            </nav>
        </div><!-- /container -->
    </body>

<script type="text/javascript">

var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#mapa',
        lat: 19.442225,
        lng:  -99.203614
      });

    center = map.addMarker({
  lat: 19.442225,
  lng: -99.203614,
  icon : {
                size : new google.maps.Size(64,64),
                url : '/credimap/imgs/pin.png'
              }

});

    
      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('No se puedo localizar: '+error.message);
        },
        not_supported: function(){
          alert("Cambiate de compu");
        }
      });
    });


</script>

    <script src="/credimap/js/classie.js"></script>
    <script src="/credimap/js/borderMenu.js"></script>
</html>