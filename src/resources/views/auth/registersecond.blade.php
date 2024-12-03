@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
@endsection

@section('content')
<div class="form">
    <div class="title">
        <h2>新規会員登録</h2>
        <h3>STEP2 体重データの入力</h3>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="content">
            <label for="name">現在の体重</label><br><br>
            <input type="text" placeholder="現在の体重を入力"><label for="name">kg</label><br><br><br><br><br><br>

            <label for="email">目標の体重</label><br><br>
            <input type="text" placeholder="目標の体重を入力"><label for="name">kg</label><br><br><br><br>
            <input type="submit" value="アカウント作成"><br><br>
        </div>
    </form>
</div>
@endsection