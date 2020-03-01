@extends('layout')

@section('content')
<div class="mainVisual">
    <div class="mainText">
        <p class="mainText_text">みんなの聞いた音楽の感想を共有しよう<br>
        <span class="mainText_lead">-ミューレビュ-</span><br>
        <span class="fw-n">新しい音楽を探しているなら<br>
        ミューレビュで見つけよう</span></p>
    </div>
</div>

<div class="contentsArea">
<section class="section">
    <h2 class="heading02">How to use</h2>
    <div class="block01">
        <div class="block01_item">
            <p class="block01_title"><span class="block01_head">1. </span>会員登録しよう</p>
            <p class="block01_img mb10"><img src="{{ asset('images\icon-01.png') }}"></p>
            <p>会員登録すると画面の右下に投稿ボタンが表示されます。<br>
            そちらをクリックするとレビューを投稿することができます。</p>
        </div>
        <div class="block01_item">
        <p class="block01_title"><span class="block01_head">2. </span>レビューを投稿しよう</p>
        <p class="block01_img mb10"><img src="{{ asset('images\icon-02.png') }}"></p>
        <p>あなたが聞いた音楽のレビューを投稿しましょう！</p>
        </div>
        <div class="block01_item">
        <p class="block01_title"><span class="block01_head">3. </span>みんなで共有しよう</p>
        <p class="block01_img mb10"><img src="{{ asset('images\icon-03.png') }}"></p>
        <p>みんなが投稿したレビューを見てみましょう！<br>
        新しい発見があるかもしれません。</p>
        </div>
    </div>
    <a class="btn-01 mt40" href="{{ route('register') }}">{{ __('新規登録') }}</a>
</section>

<section class="section">
    <h2 class="heading02-02">さっそく始めましょう！</h2>
    <a href={{ route('shop.list') }} class="btn-02">投稿一覧ページへ</a>
</section>
</div>

@auth
    <a href={{ route('shop.new') }} class="float-btn">
                <div class="float-btn-icon">
                <i class="fas fa-pen"></i>
                </div>
                <div class="float-btn-text">レビューする</div>
    </a>
    @endauth


@endsection