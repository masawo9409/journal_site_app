<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article show</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル</p>
    <p>{{ $article->title }}</p>
    <br>
    <p>{!! nl2br(e($article->body)) !!}</p>

</body>
</html>