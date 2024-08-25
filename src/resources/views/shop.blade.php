@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
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
    <div class="search">
      <form action="/search" method="post">
        @csrf
        <select name="area" class="select_area">
          <option value="All area">All area</option>
          <option value="東京都" onchange="submit(this.form)">東京都</option>
          <option value="大阪府" onchange="submit(this.form)">大阪府</option>
          <option value="福岡県" onchange="submit(this.form)">東京都</option>
        </select>
        <select name="genre" class="select_genre">
          <option value="All genre">All genre</option>
          <option value="寿司" onchange="submit(this.form)">寿司</option>
          <option value="焼肉" onchange="submit(this.form)">焼肉</option>
          <option value="居酒屋" onchange="submit(this.form)">居酒屋</option>
          <option value="イタリアン" onchange="submit(this.form)">イタリアン</option>
          <option value="ラーメン" onchange="submit(this.form)">ラーメン</option>
        </select>
        <input type="text" value="name" placeholder="🔍search...">
      </form>
    </div>
  </div>
@endsection

@section('content')
<div class="username">
<h2>{{$username}}さん</h2>
</div>
@for($i = 0;$i <= 19;$i++)
<div class="shop">
  <img src="{{ $shops[i]->picture }}" alt="Image Description">
  <h3>{{$shops[i]->name}}</h3>
  <p>#{{$shops[i]->area}}</p>
  <p>#{{$shops[i]->genre}}</p>
  <form class="overview" action = "/detail/{{$shops[i]->id}}" method="get">
    @csrf
    <button class = "overview-form__button-submit" type = "submit">詳しく見る</button>
  </form>
  @isset($favorite[i])
  <form class="favorite" action = "/favorite" method="post">
    @csrf
    <button class = "favorite-form__button-submit" type = "submit"></button>
  </form>
  @endisset
  @empty($favorite[i])
  <form class="favorite_delete" action = "/favorite_delete" method="post">
    @csrf
    <button class = "favorite_delete-form__button-submit" type = "submit"></button>
  </form>
  @endempty
</div>
@endfor
@endsection