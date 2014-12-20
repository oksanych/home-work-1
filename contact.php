<?php
	$title = 'Свяжитесь со мной';
	$menu_active = "contact";
	require_once 'header.php';
?>

		<div class="content_main">
			<?php
				require_once 'sidebar.php';
			?>
			<div class="content">
				<div class="about_me contact_main">
					<h1>У вас интересный проект? Напишите мне</h1>
					<form action="">
						<label for="name">Имя
							<input type="text" placeholder="Как к Вам обращаться">
						</label>

						<label for="email">Email
							<input type="text" placeholder="Как к Вам обращаться">
						</label>

						<label for="textarea">Сообщени
							<textarea cols="30" rows="10" placeholder="Кратко в чем суть" ></textarea>
						</label>

						<label for="captcha">Введите код, указанный на картинке
							<span class="captcha"></span>
							<input type="text" placeholder="Введите код">
						</label>

						<button type="submit" class="send">Отправить</button>
						<button type="reset" class="clean">Очистить</button>
					</form>
				</div>
			</div>
		</div>
<?php
	require_once 'footer.php';
?>