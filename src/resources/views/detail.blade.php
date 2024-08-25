@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('header')
  <div class="header">
    <div class="nav">
      <input id="drawer_input" class="drawer_hidden" type="checkbox">
      <label for="drawer_input" class="drawer_open"><span></span></label>
      <nav class="nav_content">
        <ul class="nav_list">
        <li class="nav_item">
            <form class = "login-move" action = "/" method = "get">
            @csrf
            <button class = "login-form__button-submit" type = "submit">Home</button>
            </form>
          </li>
          <li class="nav_item">
            <form class = "login-move" action = "/login" method = "get">
            @csrf
            <button class = "login-form__button-submit" type = "submit">Logout</button>
            </form>
          </li>
          <li class="nav_item">
            <form class = "login-move" action = "/my_page" method = "get">
            @csrf
            <button class = "login-form__button-submit" type = "submit">Mypage</button>
            </form>
          </li>
        </ul>
      </nav>
    </div>
  </div>
@endsection

@section('content')
<div class="shop_detail">
  <form class="back" action = "/">
    @csrf
    <button class = "form__button-submit" type = "submit"><</button>
  </form>
  <div class="shop">
    <img src="{{ $shop->picture }}" alt="Image Description">
    <h3>{{$shop->name}}</h3>
    <p>#{{$shop->area}}</p>
    <p>#{{$shop->genre}}</p>
    <div>{{$shop->overview}}</div>
  </div>
  <div class="shop_book">
    <form class="shop_book__form" action="post" method="post">
      @csrf
      <input type="date" id="date" name="date"class="form-date">
      <input type="time" id="time" name="time" class="form-time">
      @for($i = 1;$i <= 10; $i++)
        <select name="number-of-people" class="number-of-people">
          <option value="{{$i}}">{{$i}}</option>
        </select>
      @endfor

      <button class="book-form__button-submit" type="submit">予約する</button>
    </form>
  </div>
</div>
@endsection