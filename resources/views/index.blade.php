<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Credimap | Campus Party</title>
    <meta name="description" content="Proyecto para el concurso de Campus Party y PRONAFIM creado por Vladimir Galicia y Mario Ortega" />
    <meta name="keywords" content="campus party,pronafim, microfinanciamiento, empresario, financiamiento, negocios, recursos, fondo, apoyo, iniciativas, secretaria de economia, economia, gobierno federal, apoyar, bajos ingresos, ingresos, empleo, oportunidades de negocio, mexicanas, mexicanos, inversion, desarrolladas, mexico, habilidades empresariales basicas, empresariales, programa nacional, microempresario, marginacion" />
    <meta name="author" content="Vladimir" />
    <link rel="shortcut icon" type="image/x-icon" href="http://www.pronafim.gob.mx/static/img/favicon.ico">


    <!-- Normalize CSS -->
    <link href="/front/css/normalize.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="/front/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/front/css/ctin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/front/fonts/IconsCTIN/iconsCTIN.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  
        <script src="/credimap/js/gmaps.js"></script>


</head>

<body class="container">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top">
            
            <!-- Header logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="/credimap/imgs/logos_header.png">
                </a>
            </div> <!-- END Header logo -->

            <!-- Sidebar Menu Items -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav side-nav">

                    
                    <li class="text-center row-2">
                        <a href="{{ url('/') }}">
                            <i class="icon-d_mapa"></i>
                            <samp>Mapa</samp>
                        </a>
                    </li>
                    <li class="text-center row-2">
                        <a href="{{ url('/calculadora') }}">
                            <i class="icon-d_proyectos"></i>
                            <samp>Calculadora</samp>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Sidebar Menu Items  -->
        </nav> <!-- End  Navigation-->

        <!-- General Container -->
        <div class="page-wrapper">

        @yield('mapa')
        @yield('calculadora')

        </div>
        <!-- END General Container -->

    <!-- jQuery -->
    <script src="/front/js/jquery.js"></script>
    <!-- rating js -->
    <script src="/front/js/rating.js"></script>
    <!-- Bootstrap -->
    <script src="/front/js/bootstrap.min.js"></script>
    <!-- Bootstrap-table js -->
    <script src="/front/js/bootstrap-table.js"></script>

    @yield('js')
</body>

</html>
