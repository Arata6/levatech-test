<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
<<<<<<< HEAD

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>

    <body class="antialiased">
=======
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>

    <body>
>>>>>>> origin/master
        <h1>Blog Name</h1>
        <div class ='posts'>
            @foreach ($posts as $post)
                <div class='post'>
<<<<<<< HEAD
                    
=======
                    <h2 class ='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
>>>>>>> origin/master
                    <p class='body'>{{ $post->body}}</p>
                </div>
            @endforeach
        </div>
        <div class ='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
