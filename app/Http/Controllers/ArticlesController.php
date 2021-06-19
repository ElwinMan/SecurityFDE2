<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function  index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $article->update($this->validateArticle($request));

        return redirect(route('articles.show', $article));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('articles.index'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
