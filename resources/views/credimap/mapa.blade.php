@extends('index')

@section('mapa')
<div class="general-info col-sm-10 col-sm-offset-1">

  <div id="mapa"></div>

 </div>
                   
                <!-- General User data -->
                
            <!-- END Generl  -->

@endsection

@section('js')
<script type="text/javascript">
var map;


      map = new GMaps({
        div: '#mapa',
        lat: -12.043333,
        lng: -77.028333
      });

   
</script>
@endsection