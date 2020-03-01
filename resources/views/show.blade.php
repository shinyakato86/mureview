@extends('layout')

@section('content')

<div class="contentsArea">
<section class="section">
    <h2 class="heading02">投稿編集詳細</h2>
<table class="table-01">
        <tbody>
            <tr>
                <th>アルバム名</th>
                <td>{{ $shop->name }}</td>
            </tr>
            <tr>
                <th>アーティスト名</th>
                <td>{{ $shop->address }}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{{ $shop->coment }}</td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td>{{ $shop->category->name }}</td>
            </tr>
        </tbody>
</table>
</section>


    <div class="mt60">
    <a href={{ route('shop.list') }} class="btn-secondary btn mr-3">一覧に戻る</a>
    @auth
        @if ($shop->user_id === $login_user_id)
            <a href={{ route('shop.edit', ['id' =>  $shop->id]) }} class="btn-primary btn">編集</a>
            <p></p>
            {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
                {{ Form::submit('削除', ['class' => 'btn btn-danger mt20']) }}
            {{ Form::close() }}
        @endif
    @endauth
</div>

</div>
@endsection