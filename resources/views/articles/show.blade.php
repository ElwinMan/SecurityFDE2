<head>
    <title>Articles</title>
</head>


<h1 class="stopBeingSoDifficult">Articles</h1>

<div class="strengths">
    <h3>{{ $article->title }}</h3>
    <p>{{ $article->body }}</a></p>
    <button><a href="/articles/{{$article->id}}/edit">Edit</a></button>
    <button><a href="/articles">back</a></button>
</div>
