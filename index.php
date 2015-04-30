<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(44.925766,-93.171616);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });

  <?php    for ( $i = 10 ; $i >= 0; $i--) {  ?>
  var marker<?php echo $i; ?> = new google.maps.Marker({
      position: new google.maps.LatLng(44.9<?php echo $i; ?>5766,-93.171616),
      map: map,
      title: 'Hello <?php echo $i; ?>!'
  });

  <?php
    }; //end for loop
  ?>

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
  from https://developers.google.com/maps/documentation/javascript/examples/marker-simple
    <div id="map-canvas"></div>
  </body>
</html>