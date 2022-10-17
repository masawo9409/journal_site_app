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
        return view('articles.show',['article' => $article]);
    }

    public function index()
    {
        //モデル名::テーブル全件取得
        $article = Article::all();
        //
        return view('articles.index',['article'=> $article]);
    }
}
