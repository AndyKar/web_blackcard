<?php 
  require_once("connect.php");
  try {
    $query = "SELECT DISTINCT `p_region` 
	FROM partner
	ORDER BY `p_region`
	";
	$rez = $pdo->query($query);
	
    $regions = $rez->fetchAll();
    foreach($regions as $region){
	  echo '<option value="'.$region['p_region'].'">'.$region['p_region'].'</option>';
	}
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>