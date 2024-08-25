@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
  <div class="nav">
    <input id="drawer_input" class="drawer_hidden" type="checkbox">
    <label for="drawer_input" class="drawer_open"><span></span></label>
    <nav class="nav_content">
      <ul class="nav_list">
        <li class="nav_item">
          <form class = "login-move" action = "/register" method = "get">
          @csrf
          <button class = "login-form__button-submit" type = "submit">Home</button>
          </form>
        </li>
        <li class="nav_item">
          <form class = "login-move" action = "/register" method = "get">
          @csrf
          <button class = "login-form__button-submit" type = "submit">Register</button>
          </form>
        </li>
        <li class="nav_item">
          <form class = "login-move" action = "/login" method = "get">
          @csrf
          <button class = "login-form__button-submit" type = "submit">Login</button>
          </form>
        </li>
      </ul>
    </nav>
  </div>
@endsection

@section('content')
<div class="register">
  <h3 class="thanks-message">会員登録ありがとうございます</h3>
  <form action="/login" method="get" class="change-login_form">
    @csrf
  <div class="form__button">
      <button class="form__button-submit" type="submit">ログインする</button>
  </div>
  </form>
</div>
@endsection