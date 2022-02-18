<!DOCTYPE HTML>
<html>

<head>
	<title>DD_MSU</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	 <link rel="manifest" href="manifest.json">
</head>

<body>
	<div class="load-block">
		<div class="title">
			Онлайн сервіс вашиш документів
		</div>
		<div class="loading-img">
			<img src="img/gerb.png" alt="">
			<div class="load-text">Завантаження особистих даних...</div>
		</div>
		<div class="gooey">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>

	<div class="main-block">
		<div class="swiper mySwiper">

			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="title">
						Міністерство уже не молоді <br> і спорту України
					</div>
					<h1>Посвідчення №1763</h1>
					<div class="photo">
						<img src="img/shtamp.png" alt="">
						<div class="seal">
							<img src="img/shtamp.png" alt="">
						</div>
					</div>
					<div class="name">Дмитро Дуборіз</div>
					<div class="ms">
						МАЙСТЕР СПОРТУ УКРАЇНИ <br> з гантельно-катального <br> спорту
					</div>
					<div class="data">
						<span class="bold">Дійсне:</span> від 19.02.2022р.
					</div>
					<div class="owner"> <span class="bold">Видав:</span> Президент ФГКСУ Олександр Володимирович.</div>

				</div>
				<div class="swiper-slide">
					<div class="title">
						Міністерство уже не молоді <br> і спорту України
					</div>
					<div class="list">
						<ul> Переваги МСУ:
							<li>Безкоштовний сидячий проїзд в громадському транспорті</li>
							<li>Позачергове обслуговування в державних структурах та медичних закладах</li>
							<li>Додаткова 1000грн. від Зеленського щороку після виходу на пенсію та новенький смартфон</li>
							<li>10% знижка на товари та послуги спортивних магазинів, фітнес-клубів та наших спонсорів.</li>
							<li>Повага членів Федерації гантельно-катального спорту</li>
						</ul>
					</div>
					<div class="remark">
						<div class="remark-title">
							Зауваження
						</div>
						<div class="remark-text">
							Посвідченням даного типу нагороджуються спортсмени, які цілеспрямовано, старанно, впевнено
							дійшли до своєї мети але так і не потрапили на змагальну арену, тому не несе ніякої
							цінності.
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="title">
						Міністерство уже не молоді <br> і спорту України
					</div>
					<div class="wrap-message">
						<div class="message">
							<div class="msg-title">Ваші повідомлення</div>
							<div class="msg-list">
								<div class="msg-item">
									<div class="msg-item-title">МС</div>
									<div class="msg-item-text">Вітаємо з отриманням МСУ з гантельно-катального спорту. Бажаємо подальших спортивних успіхів.</div>
									<div class="msg-item-answer">
										<button type="button">Відповісти</button>
									</div>
								</div>
								<div class="msg-item">
									<div class="msg-item-title">День Народження</div>
									<div class="msg-item-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
										Sapiente, nihil.</div>
									<div class="msg-item-answer">
										<button type="button">Відповісти</button>
									</div>
								</div>
								<div class="msg-item">
									<div class="msg-item-title">Чемпіонат України</div>
									<div class="msg-item-text">Запрошуємо прийняти участь в чемпіонаті України з ГКС. 02.06.2020р.</div>
									<div class="msg-item-answer">
										<button type="button">Відповісти</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="answer-block">
						<div class="close">x</div>
						<div class="answer-text">
							Зверніться за адресою <br>
							м.Київ, вул. Хорива 39-41 <br>
							Відчинено: з 8:00 - 17:00
						</div>
					</div>

				</div>

				<div class="swiper-slide">
					<div class="title">
						Міністерство уже не молоді <br> і спорту України
					</div>

					<div class="sponsors">
						<h1>Наш спонсор - ваші досягнення</h1>
						<div class="sponsor-box">
							<img src="img/m.jpg" alt="">
							<img src="img/kfs.jpg" alt="">
						</div>
						<div class="sponsor-box">
							<img src="img/hata.png" alt="">
							<img src="img/dominos.png" alt="">
						</div>
						<div class="sponsor-box">
							<img src="img/viski.jpg" alt="">
							<img src="img/cola.jpg" alt="">
						</div>
						<div class="sponsor-box">
							<img src="img/vodka.jpg" alt="">
							<img src="img/beer.jpg" alt="">
						</div>

					</div>
				</div>

			</div>
			<div class="swiper-pagination"></div>
		</div>

	</div>

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			direction: "vertical",
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	</script>


	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/script.js"></script>
</body>

</html>
