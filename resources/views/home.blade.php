@extends('layouts.app')

@section('content')
<div class="page-mypage page-2colum page-logined">
    <div id="contents" class="site-width">
        <h1 class="page-title">マイページ</h1>

        <!-- main -->
        <section id="main">
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">登録商品一覧</h2>
            </section>
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">連絡掲示板一覧</h2>
            </section>
            <section class="list panel-list">
                <h2 class="title" style="margin-bottom: 15px;">お気に入り一覧</h2>
            </section>
        </section>

        <!-- side -->
        <section id="sidebar">
            <a href="/">
                <h2>商品一覧</h2>
            </a><br>
            <a href="/mycart">
                <h2>マイカート</h2>
            </a>
        </section>
    </div>
</div>


@endsection