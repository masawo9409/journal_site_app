<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        //モデル名::テーブル全件取得
        $article = Article::all();
        //
        return view('articles.index', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }



    public function store(Request $request)
    {
        //Modelsクラスの中でインスタンスの作成
        $article = new Article;

        //値の用意
        $article->title = $request->title;
        $article->body  = $request->body;

        $article->save();
        
        return redirect('/articles');
    }
}
