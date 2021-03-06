﻿<!DOCTYPE html>
<html lang='ru'>
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content="width=devise-width, initial-skale=1.0">
  <meta name = "discription" content="Заказать иконы">
  <meta name = "author" content="Ксения">
  <title>Икона</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--<link href="../File_CSS/normalize.css" rel="stylesheet">-->
  <link href="<?=asset('File_CSS/main.css');?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">

  <link rel="stylesheet" href="<?=asset('css/fonts/font-awesome.min.css');?>">




</head>
<body>
  <!--Header-->
  <header class="header" id="header">
    <div class="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
         <a class="navbar-brand" href="#">
           <ion-icon name="color-palette" width="30" height="30" class="d-inline-block align-top"></ion-icon>
           ИС "СПАС"
         </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url("/") }}">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Иконы
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Венчальные Иконы</a>
          <a class="dropdown-item" href="#">Именные Иконы</a>
          <a class="dropdown-item" href="#">Мерные Иконы</a>
          <a class="dropdown-item" href="#">Храмовые Иконы</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Иконописная Школа "Зограф"
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Про Нас</a>
          <a class="dropdown-item" href="#">Работы Учеников</a>
          <a class="dropdown-item" href="#">Aбитуриенту</a>
        </div>
      </li>
          <li class="nav-item active">
      <a class="nav-link" href="{{ url("order") }}">Заказать работу<span class="sr-only">(current)</span></a>
    </li>
  </ul>
  </div>
</nav>
<!--<div class="content-wrap">-->

    </div>

  </header>
  <!--carousel-->
  <div class="col-wide">
    <div id="carouselExampleIndicators" class="carousel slide slide-icone" data-ride="carousel">
      <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img class="d-block w-100" src="../Icona_Image/importance1.jpg" alt="Первый слайд">
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="../Icona_Image/profil1.jpg" alt="Второй слайд">
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="../Icona_Image/profil2.jpg" alt="Третий слайд">
         </div>
       </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
           </a>
      </div>
</div>
<!--</div>-->
    <h1 class="name">Ксения Спасская</h1>
    <nav class="social-icons">
      <ul>
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-vk"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="mail"></ion-icon></a></li>
      </ul>
    </nav>
  <!--Intro-->
  <!--<section class="intro">
    <div class="content-intro">
      <h1>ЗДЕСЬ МОЖНО ВСТАВИТЬ СВОЮ ТОЧКУ ЗРЕНИЯ<span>которая характеризует тебя</span></h1>
      <button class="button-intro">Мои Работы</button>
    </div>
  </section>-->

  <!--Icona Work-->
  <section class="icona-work">
    <h1>Иконы</h1>
    <div>
    <a class="btn  icona-button" href="#" role="button">Венчальные Иконы</a>
    <a class="btn icona-button" href="#" role="button">Именные Иконы</a>
    <a class="btn icona-button" href="#" role="button">Мерные Иконы</a>
    <a class="btn icona-button" href="#" role="button">Храмовые Иконы</a>
    <a class="btn icona-button" href="#" role="button">Росписи</a>
  </div>
    <h4>Ксения Спасская - Регент хора и руководитель иконописной школы "Зограф" в Українська Православна Церква</h4>
    <div class="work-container">
      <!--Single work item-->
      <div class="work-item item-1 ">
        <img src="../Icona_Image/icona_work_1.jpg" alt="" class="work-item__img">
        <a href="" class="work-item__icon" data-id="1">
        <ion-icon name="search"></ion-icon>
        </a>
      </div>
      <!--end of single work item-->
      <!--Single work item-->
      <div class="work-item item-2 ">
        <img src="../Icona_Image/icona_work_2.jpg" alt="" class="work-item__img">
        <a href="" class="work-item__icon" data-id="2">
        <ion-icon name="search"></ion-icon>
        </a>
</div>
      <!--end of single work item-->
      <!--Single work item-->
      <div class="work-item item-3">

        <img src="../Icona_Image/icona_work_3.jpg" alt="" class="work-item__img">
        <a href="" class="work-item__icon" data-id="3">
          <ion-icon name="search"></ion-icon>

        </a>
  </div>
      <!--end of single work item-->
      <!--Single work item-->
      <div class="work-item item-4">
        <img src="../Icona_Image/icona_work_4.jpg" alt="" class="work-item__img">
        <a href="" class="work-item__icon" data-id="4">
        <ion-icon name="search"></ion-icon>
        </a>
      </div>

    <!--Single work item-->
    <div class="work-item item-5">
      <img src="../Icona_Image/icona_work_5.jpg" alt="" class="work-item__img">
      <a href="" class="work-item__icon" data-id="5">
      <ion-icon name="search"></ion-icon>
      </a>
    </div>

  <!--Single work item-->
  <div class="work-item item-6">
    <img src="../Icona_Image/icona_work_6.jpg" alt="" class="work-item__img">
    <a href="" class="work-item__icon" data-id="6">
      <ion-icon name="search"></ion-icon>
    </a>
  </div>

<!--Single work item-->
<div class="work-item item-7">
  <img src="../Icona_Image/icona_work_7.jpg" alt="" class="work-item__img">
  <a href="" class="work-item__icon" data-id="7">
    <ion-icon name="search"></ion-icon>
  </a>
</div>

<!--Single work item-->
<div class="work-item item-8">
  <img src="../Icona_Image/icona_work_8.jpg" alt="" class="work-item__img">
  <a href="" class="work-item__icon" data-id="8">
    <ion-icon name="search"></ion-icon>
  </a>
</div>
</div>

    <!--modal-->
    <div class="work-modal">
      <div class="work-modal__item"></div>
      <div class="work-modal__close">
      <ion-icon name="close-circle"></ion-icon>
      </div>
    </div>
  </section>

  <!--About Icone School-->
  <section>
    <h1>Иконописная школа "Зограф"</h1>
      <div>
      <a class="btn icona-button" href="#" role="button">Про нас</a>
      <a class="btn icona-button" href="#" role="button">Работы учеников</a>
      <a class="btn icona-button" href="#" role="button">Абитуриенту</a>
    </div>
    <div class="about-container " id="about">

        <!--About-->
  <!--div class="col">
    <!--first child-->
    <div class="section-title">
      <!--<h1>Иконописная школа "Зограф"</h1>
      <hr>-->
      <p class="section-title__text"> Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году. Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году. Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.</p>
    </div>
    <!--second child-->
    <div class="about__img">
      <img src="../Icona_Image/importance1.jpg" class="about__img-item" alt="about__img">
    </div>

  <!--end about-->
  <!--About--
<div class="col">
<!--first child-->
<div class="section-title ">
<h1>Иконописная школа "Зограф"</h1>
<hr>
<p class="section-title__text"> Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году. Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году. Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.Школа была открыта в 2018 году.</p>
</div>
<!--second child-->
<div class="about__img-special">
<img src="<?=asset('Icona_Image/importance2.jpg');?>" class="about__img-item  " alt="about__img">
</div>
<!--/div>
<!--end about-->
</div>
  </section>
  <!--Contact Me-->
<section class="contact-me">
      <h1>Контакты</h1>
    <div class="contact-container">
<iframe class="contact-map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A064c5195e4b24c40419b3a139709df3517b0e5100ea8a3569f84cbd238658600&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
<div class="contact-info">
        <!--single contact item-->
        <div class="contact-item">
          <div class="contact-item__icon">
            <ion-icon name="pin"></ion-icon>
          </div>
          <h2 class="contact-item__title">адресс</h2>
          <p class="contact-item__text">
            г.Мелитополь, ул.Монастырская, 45
          </p>
        </div>
        <!--end-->
        <!--single contact item-->
        <div class="contact-item">
          <div class="contact-item__icon">
            <ion-icon name="call"></ion-icon>
          </div>
          <h2 class="contact-item__title">телефон</h2>
          <p class="contact-item__text">
            +38 098 888 8888
          </p>
        </div>
      </div>
        <!--end-->
        <!--single contact item-->
        <div class="contact-info">
        <div class="contact-item">
          <div class="contact-item__icon">
            <ion-icon name="time"></ion-icon>
          </div>
          <h2 class="contact-item__title">часы работы</h2>
          <p class="contact-item__text">
            пн-пт: 8.00-17.00;
          </p>
        </div>
        <!--end-->
        <!--single contact item-->
        <div class="contact-item">
          <div class="contact-item__icon">
            <ion-icon name="mail"></ion-icon>
          </div>
          <h2 class="contact-item__title">e-mail</h2>
          <p class="contact-item__text">
            icona-school@gmail.com
          </p>
        </div>
      </div>
        <!--end-->
      </div>
    </div>
</section>
<!--Footer-->
<foote class="footer">
  <div class="content-wrap">
    <p>KharitonIT 2018</p>
    <hr>

  </div>
</footer>
<script src="<?=asset('File_JS/logic.js');?>"></script>
<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
