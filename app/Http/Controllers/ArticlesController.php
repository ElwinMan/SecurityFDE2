<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function index()
    {

        return view( 'articles', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show(Article $article)
    {
        return view($article->path(), [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create($this->validateArticle());

//        Article::create([
//            'title' => request('title'),
//            'excerpt' => request('excerpt'),
//            'body' => request('body')
//        ]);

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
