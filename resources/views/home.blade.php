@extends('layouts.app')

@section('content')
<div class="page-mypage page-2colum page-logined">
    <div id="contents" class="site-width">
        <h1 class="page-title">マイページ</h1>

        <!-- main -->
        <section id="main">
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">登録商品一覧</h2><br>
            </section>
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">連絡掲示板一覧</h2><br>
            </section>
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">お気に入り一覧</h2><br>
            </section>
        </section>

        <!-- card -->
        <div class="card card_home" style="width: 18rem;">
            @if(!empty($authUser->thumbnail))
            <img src="/storage/user/{{ $authUser->thumbnail }}" class="thumbnail"><br>
            @else
            <img src="../image/cammmra.jpeg" alt="写真" class="thumbnail">
            @endif
            <hr color="black">
            <div class="card-body">
                <h5 class="card-title">{{ $authUser->name }}</h5>
                <a href="{{ route('user.userEdit') }}" class="btn btn-primary btn-sm">編集</a>
                <a href="{{ route('user.userEdit') }}" class="btn btn-danger btn-sm">削除</a>
            </div>
        </div>

        <!-- side -->
        <section id="sidebar">
            <a href="/">
                <h2>商品一覧</h2>
            </a><br>
            <a href="/mycart">
                <h2>マイカート</h2>
            </a><br>
            <a href="/home/user/userEdit">
                <h2>プロフィール</h2>
            </a><br>
        </section>
    </div>
</div>


@endsection