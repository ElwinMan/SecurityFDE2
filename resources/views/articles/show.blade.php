@extends('layout')

@section('content')
    <main>
        <h4>{{ $article->title }}</h4>
        <p>{{ $article->body }}</p>
        <br>
        <h4><a href="{{ route('articles.edit', $article) }}">Edit</a></h4>
    </main>
@endsection
