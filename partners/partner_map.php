<?php		
		$start_dot = $_GET['partner'];
		foreach($info as $dots){
			if($dots['id'] == $start_dot){
				$start_cord = $dots['p_latitude'].', '.$dots['p_longitude'];
			};
			$dot_adress[] = $dots['p_street_adress'];
			$dot_cord[] = $dots['p_latitude'].', '.$dots['p_longitude'];
			$dot_logo[] = $dots['p_logo'];
		 };
		
?>	
		<div id="sticker">
		<div id="map_canvas">
		</div>
		</div>
			<script>
				function initialize() { 
					
					var myLatlng = new google.maps.LatLng(<? echo $start_cord; ?>);
		<?php	
		$var_i = 0;
		foreach($info as $marker_var){					
				echo 'var pos'.$marker_var['id'].' = new google.maps.LatLng('.$marker_var['p_latitude'].', '.$marker_var['p_longitude'].');';
				$var_i++;
		}	
		?>
					var myOptions = {
		
						zoom: 16,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						scrollwheel: false
					};
					
					var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
					
					var contentString = '<img class="" src="http://blackcard.by/partners/logo/<? echo $dot_logo[0] ?>" alt=""/>';
					var infowindow = new google.maps.InfoWindow({
						content: contentString
					});
					/*var markerImage = new google.maps.MarkerImage(
						'http://blackcard.by/images/marker.png',
						new google.maps.Size(24,33),
						new google.maps.Point(0,0),
						new google.maps.Point(0,33)
					);*/
					var MoveMapTo = function(lat,lng) { 
						return function(e) {
						 map.panTo(new google.maps.LatLng(lat,lng));  
						}
					};
		<?php
			foreach($info as $markers){		
			echo '		var marker'.$markers['id'].' = new google.maps.Marker({
						//icon: markerImage,
						position: pos'.$markers['id'].',
						map: map,
						title: "'.addslashes($markers['p_name']).$markers['p_street_adress'].'"
					});
					google.maps.event.addListener(marker'.$markers['id'].', "click", function() {
						infowindow.open(map,marker'.$markers['id'].');
					});
				';
			echo 'jQuery("#dot'.$markers['id'].'").click(function(){
				 map.panTo(new google.maps.LatLng('.$markers['p_latitude'].','.$markers['p_longitude'].')); 
				 jQuery(".marker").removeClass("visi-marker").addClass("unvisi-marker");
				 jQuery("#marker'.$markers['id'].'").removeClass("unvisi-marker").addClass("visi-marker");
				return false;
				});
			';
			}
		?>
					

	
					
					
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBpOP2qlcxyBfPjrhXbmA91YZoWqAvVhw&callback=initialize" async defer></script>
			
