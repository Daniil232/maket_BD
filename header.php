<?php 
    //Запускаем сессию
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>maket1</title>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,400&family=Raleway&display=swap"
		rel="stylesheet">

	<!--Нормализация стилей-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

	<link rel="shortcut icon" href="img/favicon/favicon.jpg">
</head>

<body>

	<!-- .........................................................

MAIN-NAVBAR

...........................................................-->

	<section class="main-navbar">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="index.php"><img src="img/Logo.png" alt="Логотип"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Features <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Reviews</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
                        </li>
                        <?php 
                            //Проверяем, авторизован ли пользователь
                            if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                                // если нет, то выводим блок со ссылками на страницу регистрации и авторизации
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="form_register.php">Регистрация</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="form_auth.php">Авторизация</a>
                        </li>
                        <?php
                            }else{
                                //Если пользователь авторизован, то выводим ссылку Выход
                        ?>  
                                <li class="nav-item" id="link_logout">
                                    <a class="nav-link" href="logout.php">
                                        Выход
                                    </a>
                                </li>
                                <li class="nav-item" id="link_logout">
												<a href="#" class="nav-link">Привет <?php echo $_SESSION['first_name']?> 
													<img src="data:image/jpeg;base64, <?php echo $_SESSION['img'] ?>" alt="Аватарка">
												</a>
                                </li>
                        <?php
                            }
                        ?>
					</ul>
				</div>
			</nav>
		</div>
	</section>
