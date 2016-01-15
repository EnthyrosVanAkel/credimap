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
        <script src="/credimap/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
            <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  
        <script src="/credimap/js/gmaps.js"></script>


    </head>
    <body>
    <div id="mapa"></div>

    <div id="container">
        <div id="nav">Nav dgMenu</div>
    </div>
    </body>

<script type="text/javascript">
var map;

    function loadResults (data) {
      var items, markers_data = [];
      if (data.venues.length > 0) {
        items = data.venues;

        for (var i = 0; i < items.length; i++) {
          var item = items[i];

          if (item.location.lat != undefined && item.location.lng != undefined) {
            var icon = 'https://foursquare.com/img/categories/food/default.png';

            markers_data.push({
              lat : item.location.lat,
              lng : item.location.lng,
              title : item.name,
              icon : {
                size : new google.maps.Size(32, 32),
                url : icon
              }
            });
          }
        }
      }

      map.addMarkers(markers_data);
    }


    $(document).on('click', '.pan-to-marker', function(e) {
      e.preventDefault();

      var position, lat, lng, $index;

      $index = $(this).data('marker-index');

      position = map.markers[$index].getPosition();

      lat = position.lat();
      lng = position.lng();

      map.setCenter(lat, lng);
    });


      map = new GMaps({
        div: '#mapa',
        lat: -12.043333,
        lng: -77.028333
      });

      map.on('marker_added', function (marker) {
        var index = map.markers.indexOf(marker);
        $('#results').append('<li><a href="#" class="pan-to-marker" data-marker-index="' + index + '">' + marker.title + '</a></li>');

        if (index == map.markers.length - 1) {
          map.fitZoom();
        }
      });

      var xhr = $.getJSON('https://coffeemaker.herokuapp.com/foursquare.json?q[near]=Lima,%20PE&q[query]=Ceviche');

     
      xhr.done(loadResults);
   
</script>

    <script src="/credimap/js/classie.js"></script>
    <script src="/credimap/js/borderMenu.js"></script>
</html>