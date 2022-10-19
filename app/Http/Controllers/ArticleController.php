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

        //Articleデータベースの内容をリクエストされたtitleとbodyに置き換え
        $article->title = $request->title;
        $article->body  = $request->body;

        //上記の内容を保存
        $article->save();
        //保存完了したあとに、indexページに再接続している。
        return redirect('/articles');
    }

    public function edit($id) 
    {   
        //Articleモデルクラスから編集対象のidカラムを持つデータを$articleへ代入。
        $article = Article::find($id);
        //ルーティングからeditが呼び出されたときに、edit.blade.phpの$articleに代入して表示。
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request,$id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->body = $request->body;

        $article->save();

        return redirect('/articles');
    }

    public function destroy($id)
    {
        $memo = Article::find($id);
        $memo->delete();

        return redirect('/articles');
    }
    
}
