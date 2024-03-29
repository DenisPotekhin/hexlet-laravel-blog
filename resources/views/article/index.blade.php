@extends('layouts.app')

@if (Session::has('flash_message'))
	{{ Session::get('flash_message') }}
@endif

@section('content')
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        <small><a href="/articles/{{$article->id}}/edit"> редактировать статью</a></small>
        <a href="/articles/{{$article->id}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
