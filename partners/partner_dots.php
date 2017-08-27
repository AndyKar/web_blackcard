<?php	
	foreach($info as $partner){
		$dot_name = $partner['p_name'];
		$street_adress = $partner['p_street_adress'];
		$tel_number = $partner['p_tel_numbers'];
		$work_time = $partner['p_work_time'];
		$city = $partner['p_region'];
		$marker_id = $partner['id'];
		
		echo '
			<div id="dot'.$marker_id.'" class="partner-dot">
				<p>'.$dot_name.'</p>
				<p>'.$city.', '.$street_adress.'<br/>
				'.$tel_number.'<br/>
				'.$work_time.'</p>
				<div class="marker" id="marker'.$marker_id.'">
					<img src="http://blackcard.by/images/marker.png" alt="" title="" />
				</div>
			</div>
			
			
		';	
	}
	echo '
	<script>
	$(document).ready(function(){
		jQuery("#marker'.$_GET['partner'].'").toggleClass("visi-marker");
	});
	</script>
	';
				
?>
				