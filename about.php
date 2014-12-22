<?php
	$title = 'Обо мне';
	$menu_active = "about";
	require_once 'header.php';
?>

		<div class="content_main">

			<?php
				require_once 'sidebar.php';
			?>
			
			<div class="content">
				<div class="about_me about_me_general_info">
					<span class="wrap_h"><h1>Основная информация</h1></span>
					<div class="foto"><img src="images/avatar.jpg" alt="Avatar"></div>
					<div class="about">
						<p class="name"><span>Меня зовут:</span> Оксанич Александр Сергеевич</p>
						<p class="age"><span>Мой возраст:</span> 24 года</p>
						<p class="city"><span>Мой город:</span> Киев, Укарина</p>
						<p class="specialization"><span>Моя специализация:</span>FRONTEND разаработчик</p>
						<div class="skills_wrap">
							<p class="skills">
								<span>Ключевые навыки:</span>
							</p>
							<div class="skill_span_wrap">
								<span class="skill">html</span>
								<span class="skill">css</span>
								<span class="skill">javascript</span>
								<span class="skill">git</span>
							</div>
						</div>
					</div>
				</div>
				<div class="about_me work_experience">
					<span class="wrap_h"><h1>Опыт работы</h1></span>
					<p><span>"Credit Collection Group" - Ведущий специалист по взысканию пробленой задолжности</span>Сентябрь 2011 - Ноябрь 2012</p>
					<p><span>"Credit Collection Group" - Специалист по контролю качества работы контакт-центров холдинга</span>Декабрь 2012 - Февраль 2014</p>
					<p><span>Фрилансер</span>Март 2014 - по настоящее время</p>
				</div>
				<div class="about_me education">
					<span class="wrap_h"><h1>Образование</h1></span>
					<p class="universiti"><span>КНУТД, Маркетинг</span>сентябрь 2007 - май 2012 </p>
					<p class="courses"><span>Курсы компьютерная академия ШАГ</span>Ноябрь 2013 - Ноябрь 2014</p>
					<p class="courses"><span>Курсы Loftschool.ru</span>Декабрь 2014 - по настоящее время</p>
				</div>
			</div>
		</div>

<?php
	require_once 'footer.php';
?>