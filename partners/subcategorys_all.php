<?php
//получаем данные через $_POST
//if (isset($_POST['search'])){
	require_once("connect.php");
	try {
    
	$subn = 0;
	$catn = 0;
	$subquery = "SELECT DISTINCT c.cat_name, s.sub_name, s.id_cat
			 FROM `categorys` c INNER JOIN `subcategorys` s
			 ON s.id_cat = c.id_cat
			 ORDER BY c.cat_name
			 ";
    // Получаем результаты
	
	$subrez = $pdo->prepare($subquery);
	$subrez->execute();
	
	$catquery = "SELECT c.cat_name, c.id_cat
			 FROM `categorys` c 
			 ORDER BY c.cat_name
			 ";
    // Получаем результаты
	
	$catrez = $pdo->prepare($catquery);
	$catrez->execute();
	
	echo '
		
				';	
	
	$categorys = $catrez->fetchAll();
	$subcategorys = $subrez->fetchAll();
	foreach($categorys as $category){
		$id_c = $category['id_cat'];
		echo '
				<tr><td 
				class="plus"
				id="category'.$category['id_cat'].'" 
				onclick="
				jQuery(\'.category'.$category['id_cat'].'\').toggleClass(\'visi\');
				jQuery(\'#category'.$category['id_cat'].'\').toggleClass(\'minus\');
				jQuery(\'#catname\').val(\''.$category['cat_name'].'\');
				var event = new Event(\'click\'); submit.dispatchEvent(event);
				">'
				.'<b>'.$category['cat_name'].'</b>'.
				'</td></tr>
				';
		
		foreach($subcategorys as $subcategory){
			$id_s = $subcategory['id_cat'];
		if ($id_c == $id_s){
				echo '
				
				<tr style="display: none;" class="category'.$subcategory['id_cat'].' subcategory-list"><td id="subcategory'.$subcategory['id_sub'].'" onclick="jQuery(\'#subcatname\').val(\''.$subcategory['sub_name'].'\'); var event = new Event(\'click\'); submit.dispatchEvent(event);">'
				.'&nbsp;&nbsp;&nbsp;'.$subcategory['sub_name'].
				'</td></tr>
				
				';
			
			$subn++;
			}
			
		}
		$catn++;
	}
		 
		echo '
			<div id="subcat_info"><p>Категорий: '.$catn.'&nbsp;&nbsp;Подкатегорий: '
			.$subn.'</p></div>
		
		';
		
	  } catch (PDOException $e) {
		echo "Ошибка выполнения запроса: " . $e->getMessage();
		}
    


?>