@extends('layout')

@section('content')
<section class="section">
    <div class="contentsArea">
    <h2 class="heading02">{{$shop->name}}を編集する</h2>

    <div class="formArea">
    {{ Form::model($shop, ['route' => ['shop.update', $shop->id]]) }}
        <div class='form-group'>
            {{ Form::label('name', 'アルバム名:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('address', 'アーティスト名:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('coment', 'コメント:') }}
            {{ Form::textarea('coment', null, ['rows' => 5,'cols' => 40]) }}
        </div>
        <div class='form-group'>
            {{ Form::label('category_id', 'ジャンル:') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn-03']) }}
        </div>
    {{ Form::close() }}
    </div>
    <div>
        <a href={{ route('shop.list') }} class="btn btn-secondary mt20">一覧に戻る</a>
    </div>
    </div>
    <section>

@endsection