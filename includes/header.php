<section class="dd-header-wrap">
	<div class="container">
		<div class="col-md-2">
			<a class="dd-logo-hover" href="#">
				<div class="dd-box dd-logo">
					<img src="img/logo.png" alt="">
				</div>
				<div class="dd-box dd-slogan">
					<span>Web Dev</span><br>
					<span>Sqwad</span>
				</div>
			</a>
		</div>
		<div class="mobile-menu">
			<div class="col-md-6">
				<div class="dd-main-menu">
					<ul>
						<li><a href="#">О нас</a></li>
						<li><a class="dd-active" href="#">Портфолио</a></li>
						<li><a href="#">Как мы работаем</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dd-contact">
					<span>skype-test</span>
					<span>test@gmail.com</span> 
				</div>
			</div>
		</div>
		<div class="dd-burger">
			<img src="img/burg.png" alt="">
		</div>
	</div>
</section>

<script>
	$('.dd-burger').click(function(){
		$('.mobile-menu').slideToggle(500);
	});
</script>
