<head>
    <title>Articles</title>
</head>

<h1 class="stopBeingSoDifficult">Articles</h1>


<button><a href="articles/create" style="text-decoration: none"><span class="material-icons">add</span></a></button><br><br>
@foreach($articles as $article)
    <div>
        <h3><a href="/articles/{{ $article->id }}" style="text-decoration:none">{{ $article->title }}</a></h3>
        <p>{{ $article->excerpt }}</p>
        <button><a href="/articles/{{$article->id}}/edit">Edit</a></button>
        <form class="button1" method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button class="button1" type="submit"><span class="material-icons">delete</span></button>
        </form>
    </div>
@endforeach
