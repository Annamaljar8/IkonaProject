@extends('layouts.main')

@section('content')
<!-- order form section-->
<section class="order" id="order">
  <div class="order-container">
    <!--first item-->
    <form class="order-form">
      <p class="order-form__feedback">some text</p>
      <h3 class="order-form__title">Заказать икону</h3>
      <div class="order-form__input">
        <input type="text" name="" id="" placeholder="Имя" maxlength="15"
        class="input-name">
      </div>
      <div class="order-form__input">
        <input type="text" name="" id="" placeholder="Фамилия" maxlength="15"
        class="input-lastname">
      </div>
      <div class="order-form__input">
        <input type="email" name="" id="" placeholder="e-mail" maxlength="30"
        class="input-email">
      </div>
      <div class="order-form__input">
        <textarea type="text" name="" id="" placeholder="Введите текст"
        class="textarea"></textarea>
      </div>
      <div class="order-form__input">
        <input type="submit" value="sing up"
        class="input-submit">
      </div>
    </form>
  </div>
</section>

@endsection