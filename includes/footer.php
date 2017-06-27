<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
			
					<div class="dd-box dd-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="dd-box dd-slogan">
						<span>Web Dev</span><br>
						<span>Master</span>
					</div>
			
			</div>
			<div class="col-md-2">
				<div class="copy">
					<span>copyright © 2017</span>
				</div>
			</div>
			<div class="col-md-5">
				<div class="dd-contact">
					<!-- <span class="dd-skype">skype-test</span> -->
					<!-- <span class="dd-email">test@gmail.com</span> -->
					<a href="#log-in1" name="modal">Обратная связь</a> 
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>

<div id="mask"></div>
<div class="df-popup window" id="log-in1">
	<div class="dd-close"><img src="img/df-close.png" alt=""></div>
	<h3 class="df-deliverycap df-gruzcap1">Напишите ваш вопрос, <br> я отвечу вам в ближайшее время</h3>		
	<form method="post" class="form dfform" action="thanks.php">
		<input type="text" placeholder="Имя" class="dfhowinp1 dfbginput" name="uname" required> 
		<input type="email" name="email" placeholder="Email" class="phone dfhowinp2" required>
		<textarea name="text" placeholder="Введите сообщение" type="text"></textarea>
		<span class="dfpopuptext">Чтобы я мог вам ответить заполните пожалуйста корректно поле Email *</span>
		<input type="submit" class="button-1 button-1df button-2df" name="submit" value="Отправить">		
	</form>
</div>

<a href="#thanks" name="modal"></a>
<div class="df-popup window" id="thanks">
	<div class="dd-close"><img src="img/df-close.png" alt=""></div>
	<h3 class="df-deliverycap df-gruzcap1">Спасибо за ваше обращение, <br> мы ответим вам в ближайшее время</h3>
</div>

</body>
</html>
