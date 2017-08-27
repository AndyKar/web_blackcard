<?php
//получаем данные через $_POST
//if (isset($_POST['search'])){
	require_once("connect.php");
	try {
    $row_start = 0; 
	$row_limit = 1000;
	$query = "SELECT * 
			 FROM `partner` p INNER JOIN `subcategorys` s INNER JOIN `categorys` c
			 ON p.id_sub = s.id_sub AND s.id_cat = c.id_cat
			 WHERE 
			 ((p.p_name LIKE :word OR :word = '')
			 OR (p.p_street_adress  LIKE :word OR :word = ''))
			 AND 
			 (
				 (p.p_region = :region OR :region = '')
			 AND (c.cat_name = :category OR :category = '')
			 AND (s.sub_name = :subcategoryname OR :subcategoryname = '')
			 )
			 ORDER BY p.p_name
			 LIMIT $row_start, $row_limit
			 ";
    // Получаем результаты
	
	$n = 0;
	$subn = 0;
	$rez = $pdo->prepare($query);
	$rez->execute(array(':word'=>'%'.$_POST['search'].'%',
						':region'=>$_POST['region'],
						':category'=>$_POST['category'],
						':subcategoryname'=>$_POST['subcatname']
						
					
				));
	$partners = $rez->fetchAll();
	$rez_info = $_POST['region'].' '
				.$_POST['category'].' '
				.$_POST['search'].' '
				.$_POST['subcatname'];
				
	if($_POST['subcatname']){
		$subcatname = $_POST['subcatname'];
	}
	else{
		$subcatname = 'Все';
	}
		
	echo '
		 <table class="partner-table">
					<caption>Наши партненры</caption>
					<tr id="results"><th>Логотип</th><th>Наименование</th><th>Город</th><th>Адрес</th><th>Подкатегория</th><th>Скидка</th></tr>
		
	';	
		foreach($partners as $partner){
		  
		  echo '
		<tr onclick="window.open(\'partner.php?partner='.$partner['id'].'\',\'_blank\')">
					<td><img src="./logo/'.$partner['p_logo'].'"/></td>
					<td>'.$partner['p_name'].'</td>
					<td>'.$partner['p_region'].'</td>
					<td>'.$partner['p_street_adress'].'</td>
					<td>'.$partner['sub_name'].'</td>
					<td><span class="discont"> '.$partner['p_discount'].'%</span></td>
				</tr>
		  ';
	  
		  $n = $n+1; 
		}
	
		if($n == 0) {echo '
			<div id="rez_info"><p>Ничего не найдено</p></div>';}
		else {
			echo '<div id="rez_info"><p>Количество результатов'; 
				if($rez_info != '   '){	
				echo ' для '.$rez_info;}
			echo ': '.$n.'</p></div>';
			
			
			}
	echo '
		</table>
	'; 
	  } catch (PDOException $e) {
		echo "Ошибка выполнения запроса: " . $e->getMessage();
	//}
    
}

?>