<section class="dd-header-wrap">
	<div class="container">
		<div class="col-md-2">
			<a class="dd-logo-hover" href="#">
				<div class="dd-box dd-logo">
					<img src="img/logo.png" alt="">
				</div>
				<div class="dd-box dd-slogan">
					<span>Web Dev</span><br>
					<span>Studio</span>
				</div>
			</a>
		</div>
		<div class="mobile-menu">
			<div class="col-md-5">
				<div class="dd-main-menu">
					<ul>
						<li><a href="#">О нас</a></li>
						<li><a class="dd-active" href="#">Портфолио</a></li>
						<li><a href="#">Как мы работаем</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<div class="dd-contact">
					<span class="dd-skype">skype-test</span>
					<span class="dd-email">test@gmail.com</span>
					<a href="#log-in1" name="modal">Обратная связь</a> 
				</div>
			</div>
		</div>
		<div class="dd-burger">
			<img src="img/burg.png" alt="">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="dd-title">
					<span class="animated bounceInDown">Верстка Адаптивных Шаблонов</span>
					<span class="animated bounceInDown">{ HTML5 } { CSS3 } { jQwery }</span>
					<span class="animated bounceInDown">Быстро, Качественно, Низкие цены</span>
					<span class="animated bounceInLeft">"Верстка лендинга не более 5000 руб."</span>
				</div>
				<div class="dd-button">
					<a class="animated pulse" href="#">Портфолио</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$('.dd-burger').click(function(){
		$('.mobile-menu').slideToggle(500);
	});
</script>
