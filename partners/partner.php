<?php include_once 'partner_info.php'; ?>
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
							<a href="http://blackcard.by/partners/">
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
								<a href="http://blackcard.by/partners/">Партнеры</a>
								<div class="nav-active">
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
		<div class="container">
			<div class="col-md-12 col-sm-12 pad0">
			<a href="http://blackcard.by">
				<img class="img-responsive" src="http://blackcard.by/partners-img/<?php echo $head_url; ?>" alt="" title="" />
			</a>
			</div>
		</div>
	</section>
	<section id="partner-info">
		<div class="container">
			<div class="col-md-3 col-sm-12 pad0">
				<div class="col-md-12 col-sm-6 pad0">
					<div class="discont-box">
						<img class="img-responsive" src="http://blackcard.by/images/partner_discont.png" alt="" title="" />
						<span class="persents"><p>-<?php echo $discount;?>%</p><span>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 pad0">
					<!--<div class="partner-contact">
						<img class="img-responsive" src="http://blackcard.by/partners-img/<?php echo $logo; ?>" alt="" title="" />
					</div>-->

					<div class="partner-contact">
					<h4><?php echo $ur_name;?></h4>
					<p><?php echo $region;?>, <?php echo $ur_adress;?>
					</p>
					<p><?php echo $tel_numbers;?></p>
					<p><a target="_blank" href="http://<?php echo $website;?>"><?php echo $website;?></a></p>
					<p><a target="_blank" href="http://<?php echo $website2;?>"><?php echo $website2;?></a></p>
					<p><a target="_blank" href="mailio:<?php echo $mail;?>"><?php echo $mail;?></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 pad0">
				<div class="partner-title">
					<h1><?php echo $ur_name;?></h1>
				</div>
				<div class="partner-post">
					<?php echo $post;?>
				</div>
			</div>
			<div id="dots-partner" class="col-md-3 col-sm-12 pad0">
				<div id="partner-dots" class="partner-contact">
					<h3>Места продаж, оказания услуг:</h3>
					<?php include_once 'partner_dots.php'; ?>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 pad0">
				<div id="partner-map" class="partner-post">
					<?php include_once 'partner_map.php'; ?>
				</div>
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
					<h4><a href="http://blackcard.by/"><span class="dot">&#9899;&nbsp;&nbsp;</span>  Главная</a></h4>
					<h4><a href="http://blackcard.by/partners/"><span class="dot">&#9899;&nbsp;&nbsp;</span> Наши партнеры</a></h4>
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
<script>
(function(){
	var pc = window.matchMedia( "only screen and (min-width: 995px)");
		if( pc.matches ){
var a = document.querySelector('#sticker'), b = null, P = 20;
window.addEventListener('scroll', Ascroll, false);
document.body.addEventListener('scroll', Ascroll, false);
function Ascroll() {
  if (b == null) {
    var Sa = getComputedStyle(a, ''), s = '';
    for (var i = 0; i < Sa.length; i++) {
      if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; ';
      }
    }
    b = document.createElement('div');
    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
    a.insertBefore(b, a.firstChild);
    var l = a.childNodes.length;
    for (var i = 1; i < l; i++) {
      b.appendChild(a.childNodes[1]);
    }
    a.style.height = b.getBoundingClientRect().height + 'px';
    a.style.padding = '0';
    a.style.border = '0';
  }
  var Ra = a.getBoundingClientRect(),
      R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#dots-partner').getBoundingClientRect().bottom);  // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
  if ((Ra.top - P) <= 0) {
    if ((Ra.top - P) <= R) {
      b.className = 'stop';
      b.style.top = - R +'px';
    } else {
      b.className = 'sticky';
      b.style.top = P + 'px';
    }
  } else {
    b.className = '';
    b.style.top = '';
  }
  window.addEventListener('resize', function() {
    a.children[0].style.width = getComputedStyle(a, '').width;
  }, false);
}
		}
})();
</script>
</body>
</html>