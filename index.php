<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>minimalistica</title>
</head>

<!--

//$a = 5;
//$b = '05';
//
//var_dump($a == $b); // Почему true?
//Происходит не явное приведение типов. Оба числа равны.
//var_dump((int)'012345');// Почему 12345?
//Происходит приведение строки к целому десятичному числу, при этом ноль отбрасывается.
//var_dump((float)123.0 === (int)123.0); // Почему false?
//Сравнение чисел по значению и по типу, число с плавающей точкой не равно целому числу
//var_dump((int)0 === (int)'hello, world'); // Почему true?
// Потому что при приведении строки к десятичному числу, интерпретатор не находит числа и приводит ее к 0,
//то же самое будет если привести пустую строку.
-->
<?php
    
    $head = "<h1>minimalistica</h1>";
    $menu = "<ul id=\"menu\">
			<li><a href=\"#\">home</a></li>
			<li><a href=\"#\">archive</a></li>
			<li><a href=\"#\">contact</a></li>
		</ul>";
    $post_time = "<p class=\"info\">posted 3 hours ago in <a href=\"#\">general</a></p>";
    $main_post_head = "<h2><a href=\"#\">Nunc commodo euismod massa quis vestibulum</a></h2>";
    $main_post_body = "<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>";
    $rest_post = "<div class=\"col\">
			<h3><a href=\"#\">Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href=\"#\">read more</a></p>
		</div>";
    $rest_post_last = "<div class=\"col last\">
			<h3><a href=\"#\">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href=\"#\">read more</a></p>
		</div>";
    $footer = "<div id=\"footer\">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href=\"http://www.solucija.com/\" title=\"Free CSS Templates\">Solucija</a></p>
		</div>";
    
    // ДЛЯ ЗАДАНИЯ СО ЗВЕЗДОЙ
    $a = 1;
    $b = 2;
    
    $b = $a++
    
    

?>
<body>
	<div id="content">
		<?php echo $head . $menu ?>

	
		<div class="post">
			<div class="details">
				
				<?php echo $main_post_head . $post_time ?>
			
			</div>
			<div class="body">
				<?php echo $main_post_body ?>
			</div>
			<div class="x"></div>
		</div>
		
		<?php echo $rest_post . $rest_post . $rest_post_last .  $footer ?>
		
		
		
	</div>
	
<!-- Выводим задание со Звездой-->

	<?php echo "a = $a <br> b = $b" ?>
</body>
</html>

