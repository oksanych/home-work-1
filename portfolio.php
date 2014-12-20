<?php
	$title = 'Мои работы';
	$menu_active = "portfolio";
	require_once 'header.php';
?>

		<div class="content_main">
			<?php
				require_once 'sidebar.php';
			?>
			<div class="content">
				<div class="about_me my_work">
					<span class="wrap_h"><h1>Мои работы</h1></span>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_1.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 1 превью 2 строки...</p>
					</diw>


	                <diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_2.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 2 превью 2 строки...</p>
					</diw>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_3.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 3 превью 2 строки...</p>
					</diw>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_4.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 4 превью 2 строки...</p>
					</diw>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_1.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 5 превью 2 строки...</p>
					</diw>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_2.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 6 превью 2 строки...</p>
					</diw>

					<diw class="portfolio_work">
						<div class="view view-tenth">
		                    <img src="images/portfolio_3.jpg" />
		                    <div class="mask">
		                        <h2>Название</h2>
		                    </div>
		                </div>
		                <a href="#">www.site.ru</a>
		                <p>Информация о проекте 7 превью 2 строки...</p>
					</diw>

	                <div href="#" id="go" class="add_portfolio_work">
						 <div class="add_portfolio_work_content">
							<span></span>
							<p>Добавить проект</p>
						</div>
					</div >

					<div id="modal_form"><!-- Само окно --> 
					    <span id="modal_close"></span>
					    <h2>Добавление проекта</h2>
						
						<div class="modal_form_content">
						    <!-- <div class="error">
						    	<span class="error_close">&#215;</span>
						    	<h3>Ошибка!</h2>
						    	<p>Невозможно добавить проект.</p>
						    </div> -->

						    <form action="">
						    	<label for="project_name">Название проекта
						    		<input type="text" placeholder="Введите назвние">
						    	</label>
						    	<label for="project_name">URL проекта
						    		<div class="fileform">
						    		<div class="selectbutton"></div>
						    		<input id="upload" type="file" name="upload" placeholder="Загрузите изображение"/>
						    		</div>
						    	</label>
						    	<label for="project_name">Картинка проекта
						    		<input type="text" placeholder="Загрузите изображение">
						    	</label>
						    	<label for="description">Описание
						    		<textarea name="" id="" placeholder="Пара слов о Вашем проекте"></textarea>
						    	</label>
						    	<button class="add">Добавить</button>
						    </form>
					    </div>
					</div>
					<div id="overlay"></div><!-- Подложка -->	
				</div>
			</div>
		</div>
<?php
	require_once 'footer.php';
?>