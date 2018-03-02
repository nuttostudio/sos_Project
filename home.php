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
	<div class="row">
		<div class="col-8">
			<div id="map"></div>
		</div>
		<div class="col-4" align="center">
			<div style="width: 300px;height: 300px;" class="mt-5">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="width: 100%;font-size: 40px;height: 100%;border-radius: 50%;border: 5px solid #fff;"><b>แจ้งอุบัติเหตุ<br>โทร.1669</b></button>
			</div>
		</div>
	</div>
  
  <input type="hidden" id="idx" name="idx">
  <input type="hidden" id="idy" name="idy">
  <?php 
  	$dd = "7.0086471999999995";
  ?>
    <script>

      function initMap() {
			var mapOptions = {
			  center: {lat: 13.847860, lng: 100.604274},
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

				var x = $('#idx').val(position.coords.latitude);
				var xy = $('#idy').val(position.coords.longitude);
					var mapOptions = {
					  center: {lat: 13.847860, lng: 100.604274},
					  zoom: 16,
					}
						
					var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
					
					var marker1 = new google.maps.Marker({
					   position: new google.maps.LatLng(pos),
					   map: maps,
					   title: 'Location',
					   icon: 'img/lt.png',
					});

					var marker2 = new google.maps.Marker({
					   position: new google.maps.LatLng(7.0128318, 100.606973),
					   map: maps,
					   title: 'หมู่บ้านอารียา',
					   icon: 'img/map1.gif',
					});


				infoWindow.setPosition(pos);
				infoWindow.setContent('');
				// infoWindow.open(maps);
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
        infoWindow.open(maps);
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
		    		<i class="fa fa-trophy"></i> ธรรมเนียบ
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