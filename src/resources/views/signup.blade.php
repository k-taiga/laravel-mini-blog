@extends('layouts.app')

@section('content')

<h1>ユーザー登録</h1>
<form method="post">
@csrf

@include('share.error')

名前：<input type="text" name="name" value="{{ old('name') }}">
<br>
メルアド：<input type="text" name="email" value="{{ old('email') }}">
<br>
パスワード：<input type="password" name="password">
<br>

<br><br>
<input type="submit" value="　送信する　">

@endsection