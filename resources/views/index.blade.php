@extends('layout')

@section('content')

<section class="section">
    <h2 class="heading02">投稿一覧</h2>
    <div class="contentsArea">
    @include('search')

    <section class="section-review">
    @foreach ($shops as $shop)
    <div class="block02">
        <div class="block02_box">
            <p class="block02_item"><i class="fas fa-music"></i>ジャンル</p>
            <p class="block02_cat">{{ $shop->category->name }}</p>
        </div>
        <div class="block02_box">
        <p class="block02_item"><i class="fas fa-user-circle"></i>アーティスト名</p>
            <p class="block02_cat">{{ $shop->address }}</p>
        </div>
        <div class="block02_box">
        <p class="block02_item"><i class="fas fa-compact-disc"></i>アルバム名</p>
            <p class="block02_cat">{{ $shop->name }}</p>
        </div>
        <div class="block02_box">
        <p class="block02_item"><i class="fas fa-signature"></i>投稿者名</p>
            <p class="block02_cat">{{ $shop->user->name }}</p>
        </div>
        <p class="block02_item-02"><i class="fas fa-comment-dots"></i>コメント</p>
        <p class="block02_coment">{{ $shop->coment }}</p>

        <a href={{ route('shop.detail', ['id' =>  $shop->id]) }} class="btn-02-s mt40">
                        投稿詳細ページへ
        </a>

    </div>
    @endforeach
    <section>

    </div>
</section>

    @auth
    <a href={{ route('shop.new') }} class="float-btn">
                <div class="float-btn-icon">
                <i class="fas fa-pen"></i>
                </div>
                <div class="float-btn-text">レビューする</div>
    </a>
    @endauth

@endsection