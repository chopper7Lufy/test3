@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
@endsection

@section('content')
<div class="form">
    <div class="title">
        <h2>新規会員登録</h2>
        <h3>STEP1 アカウント情報の登録</h3>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="content">
            <label for="name">お名前</label><br><br>
            <input type="text" placeholder="名前を入力"><br><br><br><br>

            <label for="email">メールアドレス</label><br><br>
            <input type="text" placeholder="メールアドレスを入力"><br><br><br><br>

            <label for="password">パスワード</label><br><br>
            <input type="text" placeholder="パスワードを入力"><br><br><br><br>

            <input type="submit" value="次に進む"><br><br>
            <a href="/login">ログインはこちら</a><br><br>
        </div>
    </form>
</div>
@endsection