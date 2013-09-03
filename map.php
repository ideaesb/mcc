<?php

// locations
$baldwin = "175 Alawai Rd, Paia, HI";

$airport = "20.893665,-156.438125";

$mauiLu = "575 South Kihei Road, Kihei, HI 96753";
$dogDuck = "1913 S Kihei Rd, Kihei, HI 96753";
$kihei = $dogDuck;

$canneryMall = "1221 Honoapiilani Hwy, Lahaina, HI 96761";
$lahaina = $canneryMall;


$kaahumanuCenter = "275 W Kaahumanu Ave, Kahului, HI 96732";
$kahului = $kaahumanuCenter;

$wakhimba="3922 Lepo St, Haiku-Pauwela, HI 96708";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
	  #panel 
	  {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBqPlFKoxRdIAFmsHAmPBvxD-Pps6GzW68&sensor=false">
    </script>
    <script type="text/javascript">
    var map;
	var directionsDisplay;
    var directionsService;
	
	var theCenter = new google.maps.LatLng(20.91306, -156.39219);
	var theLogo = 'logo.ico';
	
    function initialize() 
	{
	  directionsDisplay = new google.maps.DirectionsRenderer();
	  directionsService = new google.maps.DirectionsService();
	  
      var mapOptions = 
	  {
         center: theCenter,
         zoom: 19,
         mapTypeId: google.maps.MapTypeId.SATELLITE 
      };

     // Enable the visual refresh
     google.maps.visualRefresh = true;
     map = new google.maps.Map(document.getElementById("map-canvas"),  mapOptions);
	 map.setTilt(45);
     map.setHeading(180);
	 
	 // link up the directions 
	 directionsDisplay.setMap(map);
	 
	 // circle of radius 60 meters 
     var circleOptions = 
	 {
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.25,
        map: map,
        center: theCenter,
        radius: 60
      };

      // draw circle (TO DO :  a real cricket oval)
      var fieldCircle = new google.maps.Circle(circleOptions);
	  var logoMarker = new google.maps.Marker({position: theCenter, map: map,icon: theLogo});
	  
	} // close function init()
	
	function calcRoute() 
	{
      var start = document.getElementById('start').value;
      var end = document.getElementById('end').value;

      // do nothing is start == end and if set to baldwin, refresh the map 
      if (start == end ) 
	  {
	    if (start == "<?=$baldwin?>" && end == "<?=$baldwin?>") location.reload(); 
		return;
	  }

      var request = 
	  {
        origin:start,
        destination:end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      };
	  
	  map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
	  
      directionsService.route(request, showDirections);
							  
	} // end function calculate Route() 
	
	
	// result = of direction computation , status = google.maps.DirectionsStatus
	function showDirections(result, status)
	{
      if (status == google.maps.DirectionsStatus.OK) 
      {
        directionsDisplay.setDirections(result);
      }
      else
	  {
	    alert ('DirectionsStatus NOT OK -- Ctrl+Shift+J on chrome');
      }
	  
	  /* Buggy 
	   var rendererOptions = 
	   {
	     draggable: true,
         preserveViewport: true,
		 suppressInfoWindows: true
       };
       var dirRenderer = new google.maps.DirectionsRenderer(rendererOptions); 
	  
	  dirRenderer.setDirections(result);
	  dirRenderer.setMap(map);
	  */
	  
	} // end function showDirections
	
	
    google.maps.event.addDomListener(window, 'load', initialize);
	  
    </script>
  </head>
  <body>
  
    <div id="panel">
      <b>Start: </b>
        <select id="start" onchange="calcRoute();">
         <option value="<?=$baldwin?>" >Cricket Ground</option>
         <option value="<?=$airport?>">Airport</option>
         <option value="<?=kihei?>">Kihei</option>
         <option value="<?=$lahaina?>">Lahaina</option>
         <option value="<?=$kahului?>">Kahului</option>
         <option value="<?=$wakhimba?>">Wakhimba&#8217;s Farm</option>
        </select>
       <b>End: </b>
        <select id="end" onchange="calcRoute();">
         <option value="<?=$baldwin?>" >Cricket Ground</option>
         <option value="<?=$airport?>">Airport</option>
         <option value="<?=kihei?>">Kihei</option>
         <option value="<?=$lahaina?>">Lahaina</option>
         <option value="<?=$kahului?>">Kahului</option>
         <option value="<?=$wakhimba?>">Wakhimba&#8217;s Farm</option>
        </select>
    </div>
    <div id="map-canvas"/>
  </body>
</html>