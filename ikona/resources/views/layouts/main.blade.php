<!DOCTYPE html>
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
  <header class="header-order" id="header-order">
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
        </div>
</header>
  
  @yield('content')
  

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