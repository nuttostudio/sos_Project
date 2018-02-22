<script type="text/javascript">
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
			  }, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			  });
			}
 </script>
<div class="container-fluid mt-3">
<button type="button" class="btn btn-danger mt-2 mb-2" data-toggle="modal" data-target="#myModal" style="width: 100%;font-size: 20px;"><b><i class="fa fa-bullseye" style="color: #fff;"></i> แจ้งอุบัติเหตุ หรือ โทร.1669</b></button>
  <div id="map"></div>
    <script>
      function initMap() {
			var mapOptions = {
			  center: {lat: 7.0086471999999995, lng: 100.4746879},
			  zoom: 16,
			}
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
			
			infoWindow = new google.maps.InfoWindow;

			// Try HTML5 geolocation.
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};

				infoWindow.setPosition(pos);
				infoWindow.setContent('Location found. lat: ' + position.coords.latitude + ', lng: ' + position.coords.longitude + ' ');
				infoWindow.open(maps);
				maps.setCenter(pos);
			  }, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			  });
			} else {
			  // Browser doesn't support Geolocation
			  handleLocationError(false, infoWindow, map.getCenter());
			}
			
		}

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl5vZvw78_pUo_H-2dP4TO5VIbUxMqM7M&callback=initMap" async defer></script>
    <div class="row">
    	<div class="col-7">
    		<div class="card mt-3">
		    	<div class="card-header" style="color: #000;">
		    		<i class="fa fa-history"></i> พื้นที่เกิดอุบัติเหตุ
		    		<table class="table table-hover">
		    			<thead>
		    				<tr>
		    					<th>
		    						วัน/เดือน/ปี
		    					</th>
		    					<th>
		    					 	เวลาแจ้งเหตุ
		    					</th>
		    					<th>
		    						สถานที่เกิดเหตุ/พิกัด
		    					</th>
		    					<th>
		    						สถานะ
		    					</th>
		    				</tr>
		    			</thead>
		    		</table>
		    	</div>
		    </div>
    	</div>
    	<div class="col-5">
    		<div class="card mt-3">
		    	<div class="card-header" style="color: #000;">
		    		<i class="fa fa-history"></i> ธรรมเนียบ
		    		<table class="table table-hover">
		    			<thead>
		    				<tr>
		    					<th>
		    						วัน/เดือน/ปี
		    					</th>
		    					<th>
		    					 	เวลาแจ้งเหตุ
		    					</th>
		    					<th>
		    						สถานที่เกิดเหตุ/พิกัด
		    					</th>
		    					<th>
		    						สถานะ
		    					</th>
		    				</tr>
		    			</thead>
		    		</table>
		    	</div>
		    </div>
    	</div>
    </div>
</div>
<footer class="text-center bg-white1 mt-3">
	<br>
	Copyright © SOS All rights reserved
	<br>&nbsp;
</footer>