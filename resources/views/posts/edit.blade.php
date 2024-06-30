<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>

    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class= "content_title">
                    <h2>タイトル</h2>
                    <input type="text" name ="post[title]" value="{{ $post->title }}">
                </div>
                <div class= "content_body">
                    <h2>本文</h2>
                    <input type="text" name ="post[body]" value="{{ $post->body }}">
                </div>
                <input type ="submit" value="保存"/>
                <div class ='footer'>
                    <a href="/posts{{ $post->id}}">戻る</a>
                </div>
            </form>
        </div>
    </body>
</html>
