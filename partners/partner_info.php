<?php
//получаем данные через $_GET
if (isset($_GET['partner'])){
	require_once("connect.php");
	try {
		
	$idquery = "SELECT p.p_id
			 FROM `partner` p 
			 WHERE 
				p.id = :partner_id
			 ";	
	$idrez = $pdo->prepare($idquery);
	$idrez->execute(array(
				':partner_id'=>$_GET['partner']
				));
	$idinfo = $idrez->fetchAll();
		foreach($idinfo as $partner_p_id){};
		
	$query = "SELECT * 
			 FROM `info` i INNER JOIN `partner` p INNER JOIN `subcategorys` s
			 ON i.id = p.p_id AND p.id_sub = s.id_sub
			 WHERE 
				i.id = :partner_p_id
			 ";
    // Получаем результаты
	$rez = $pdo->prepare($query);
	$rez->execute(array(
				':partner_p_id'=>$partner_p_id[0]
				));
	$info = $rez->fetchAll();
	$n_str =0;	
	if ($info) {
	foreach($info as $partner){
		
				$id[] = $partner['id'];
				$street_adress[] = $partner['p_street_adress'];
				$latitude[] = $partner['p_latitude'];
				$longitude[] = $partner['p_longitude'];
				$tel_number[] = $partner['p_tel_numbers'];
				$work_time[] = $partner['p_work_time'];
				
				
			$n_str++;
		  
		 };
		 $id[] = $partner['id'];
				$logo = $partner['p_logo_big'];
				$ur_name = $partner['i_ur_name'];
				$region = $partner['p_region'];
				$ur_adress = $partner['i_ur_adress'];
				$sub_name = $partner['sub_name'];
				$discount = $partner['p_discount'];
				$head_url = $partner['i_head_url'];
				$post = $partner['i_post'];
				$tel_numbers = $partner['i_tel_numbers'];
				$website = $partner['i_web_site'];
				$website2 = $partner['i_web_site_2'];
				$mail = $partner['i_mail'];
	}else{
			$id =  '';
			$logo =  '';
			$name =  '';
			$region =  '';
			$street_adress =  '';
			$sub_name =  '';
			$discount =  '';
			$head_url =  '';
			$post =  '';
			$tel_numbers =  '';
		};
		
		 
	  } catch (PDOException $e) {
		echo "Ошибка выполнения запроса: " . $e->getMessage();
	}
    
}

?>