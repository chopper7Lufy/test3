@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
@endsection

@section('content')
<h2>ログイン</h2>
<div class="form">
    <form class="form" action="/login" method="post">
        @csrf
        <div class="content">
            <label for="email">メールアドレス</label><br><br>
            <input type="text" placeholder="メールアドレスを入力"><br><br><br><br>

            <label for="password">パスワード</label><br><br>
            <input type="text" placeholder="パスワードを入力"><br><br><br><br>

            <input type="submit" value="ログイン"><br><br>
            <a href="/register/step1">アカウント作成はこちら</a><br><br>
        </div>
    </form>
</div>
@endsection