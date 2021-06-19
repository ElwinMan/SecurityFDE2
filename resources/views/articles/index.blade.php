@extends('layout')

@section('content')
    <main>
        <div>
            <h2><a href="{{ route('articles.create') }}">Create New Article</a></h2>
        </div>
        <div class="articles">
            @foreach($articles as $article)
                <li>
                    <h3>
                        <a href="{{ route('articles.show', $article) }}">
                            {{ $article->title }}
                        </a>
                    </h3>
                    <hr>
                    {!! $article->excerpt !!}
                </li>
            @endforeach
        </div>
    </main>
@endsection