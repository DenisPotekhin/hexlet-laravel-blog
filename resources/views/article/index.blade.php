@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        <small><a href="/articles/{{$article->id}}/edit"> редактировать статью</a></small>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
