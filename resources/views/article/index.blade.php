@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td><h2><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></h2></td>
            <div>{{Str::limit($article->body, 200)}}</div>
        </tr>
    @endforeach
@endsection