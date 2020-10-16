@extends('layouts.main')

@section('title', 'filme')

@section('header')
    <header>
        <h1>Halfscreen Photo Header</h1>
        <small class="caption">license</small>
    </header>
@endsection
@section('sidebar')
    @parent

    <p>ここはメインのサイドバーに追加される</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
@endsection
