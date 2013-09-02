<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBqPlFKoxRdIAFmsHAmPBvxD-Pps6GzW68&sensor=false">
    </script>
    <script type="text/javascript">
    
	var theCenter = new google.maps.LatLng(20.91306, -156.39219);
	var theLogo = 'logo.ico';
	
	var fieldCircle;
	
	
    function initialize() 
	{
      var mapOptions = 
	  {
         center: theCenter,
         zoom: 19,
          mapTypeId: google.maps.MapTypeId.SATELLITE 
      };

     // Enable the visual refresh
     google.maps.visualRefresh = true;
     var map = new google.maps.Map(document.getElementById("map-canvas"),  mapOptions);
	 
	 // circle of radius 60 meters 
     var circleOptions = 
	 {
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35,
        map: map,
        center: theCenter,
        radius: 60
      };

      fieldCircle = new google.maps.Circle(circleOptions);
	  
	  
	  var logoMarker = 
	    new google.maps.Marker
		({
            position: theCenter,
            map: map,
            icon: theLogo
         });
	  
	  
	  
	} // close function init()

    google.maps.event.addDomListener(window, 'load', initialize);
	  
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>