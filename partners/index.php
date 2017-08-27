<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Наши партнеры</title>
<link href="http://blackcard.by/favicon.png" rel="shortcut icon" type="image/png">
		<link href="http://blackcard.by/style.css" rel="stylesheet">
		<link href="http://blackcard.by/css/bootstrap.css" rel="stylesheet">
		<link href="http://blackcard.by/css/animate.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://blackcard.by/js/jquery-2.1.0.min.js"></script>
		<script src="http://blackcard.by/js/wow.js"></script>
		<script src="http://blackcard.by/js/jquery.viewportchecker.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">

$(function() {

    $(".search_button").click(function () {
		var msg   = $('#formx').serialize();
        var data            = msg ;
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // запустится до вызова запроса
                    
                    $("#searchresults").show();
               },
               success: function(html){ // запустится после получения результатов
					$('#subcatname').val('');
					$("#results").html('');
                    $("#results").show();
                    $("#results").append(html);
              }
            });
        
        return false;
    });
});
</script>
		<script>
		wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 200
});
		new WOW().init();
		</script>
<script>
	$(document).ready(function() {
 
 
   $("a.topLink").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 1000,
         easing: "swing"
      });
      return false;
   });
 
  $("#menu-button").click(function() {
		$("div.mobile-menu").toggleClass("open-menu");
      return false;
   });
});
	</script>
<script type="text/javascript">
$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});

});
</script>

</head>
<body>
	<header>
		<div class="main-nav">
			<div class="container">
				<div class="header-logo">
					<div class="head_logo">
						<a href="http://blackcard.by">
							<img class="logo" src="http://blackcard.by/images/black_card_logo.png"  alt="" title="" />
						</a>
					</div>	
				</div>
				<div class="navigation">
					<nav>
						<div class="mobile-menu-button">
							<img id="menu-button" class="menu-button" src="http://blackcard.by/images/menu.png" height="50" alt="" title="" />
						</div>
						<div  class="mobile-menu menu-close">
							<a href="http://blackcard.by">
							<div class="mobile-nav-element">
								<p>Главная</p>
							</div>
							</a>
							<a href="#">
							<div class="mobile-nav-element">
								<p>Партнеры</p>
							</div>
							</a>
							<a href="http://blackcard.by/#prices">
							<div class="mobile-nav-element">
								<p>Цены</p>
							</div>
							</a>
							<a class="topLink" href="#footer">
							<div class="mobile-nav-element">
								<p>Контакты</p>
							</div>
							</a>
						</div>
						<div id="pc-nav" class="pc-nav">
							<div class="nav-element">
								<a class="topLink" href="#footer">Контакты</a>
								<div class="nav-active">
								</div>
							</div>
							<div class="nav-element">
								<a href="http://blackcard.by/#prices">Цены</a>
								<div class="nav-active">
								</div>
								
							</div>
							<div class="nav-element">
								<a href="#">Партнеры</a>
								<div class="nav-active  active">
								</div>
							</div>
							<div class="nav-element">
								<a href="http://blackcard.by">Главная</a>
								<div class="nav-active">
								</div>
							</div>
						<div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	
	<section id="partner-top">
		<!--<div class="container">
			<div class="col-md-12 col-sm-12 pad0">
				<div class="top_wrap">-->
					<img class="img-responsive" src="http://blackcard.by/images/partners.jpg" alt="" title="" />
				<!--</div>
			</div>
		</div>-->
	</section>
	<section id="seach">
	<div class="container">
		<div style="margin:20px auto 20px; text-align: right;">
			<form id="formx" method="post" action="do_search.php">
				<label for="region" >Город :</label>
				<select name='region' onchange="var event = new Event('click'); submit.dispatchEvent(event);">
				  <option selected value='' >Все</option>
				  <?php include_once 'region_all.php'; ?>
				</select>
				<input id="catname" type="hidden" name="category" value="">
				<label for="search">Поисковый запрос: </label>
				<input type="text" name="search" id="search_box" class='search_box'/>
				<input type="submit" value="Поиск" id="submit" class="search_button" /><br />
				<input id="subcatname" type="hidden" name="subcatname" value=""/>
			</form>
		</div>
	</div>
	</section>
	
	<section id="rezalts">
		<div class="container">
			<div class="col-md-3 col-sm-12 pad0">
				<div id="subcat" class="subcat">
					<table class="sub-table">
						<caption>Категории</caption>
						<tr><th>Подкатегории</th></tr>
						<tr><td id="all" onclick="jQuery('#subcatname').val('');jQuery('#catname').val(''); var event = new Event('click'); submit.dispatchEvent(event);">Все</td></tr>
							 <?php include_once 'subcategorys_all.php'; ?>
					</table>
				</div>
			</div>
			<div id="partners-list" class="col-md-9 col-sm-12 pad0">
				
						<span id="results" class="update">
							<script>
							$( document ).ready(function() {
								var event = new Event("click");
								submit.dispatchEvent(event);
							});
							</script>
						 </span>
				
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="container">
			<div class="col-md-4 col-sm-6 pad0 contacts">
				<img class="" src="http://blackcard.by/images/big_logo.png" height="150" alt="" title="" />
			</div>
			<div class="col-md-4 col-sm-6 pad0">
				<div class="contacts">
					
					<p>ООО "БлэкКард"</p>
					<p>224030, г. Брест, Ул. Воровского 15/1<p>
					<p>Тел. для клиентов: &nbsp;&nbsp;+375 29 1755477<br/>
					Тел. для партнёров: &nbsp;&nbsp;+375 29 1755399</p>
					<p><a href="mailto:blackcard.by@gmail.com">e-mail: blackcard.by@gmail.com</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 pad0">
				<div class="links">
					<h4><a href="http://blackcard.by/"><span class="dot">&#9899;&nbsp;&nbsp;</span> Главная</a></h4>
					<h4><a href="http://blackcard.by/#about"><span class="dot">&#9899;&nbsp;&nbsp;</span>  О Компании</a></h4>
					<h4><a href="http://blackcard.by/programm/"><span class="dot">&#9899;&nbsp;&nbsp;</span>  Дисконтная программа</a></h4>
					<h4><a href="http://blackcard.by/terms/"><span class="dot">&#9899;&nbsp;&nbsp;</span>  Пользовательское соглашение</a></h4>
				</div>	
			</div>
		</div>
	</footer><!--/footer #footer-->
	
			<div class="copyr">
				<p style="font-size: 12px; color: #626262;">&copy; 2017 Дизайн и разработка сайта  
				<a style="font-size: 12px; color: #b0904c!important" href="http://inversum.by">Inversum Design</a>
				</p>
			</div>
		
	
	
		<a href="#" class="scrollup">Наверх</a>

</body>
</html>