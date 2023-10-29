<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Blog</title>
</head>
<body>
    <h1>レバっテックBlog</h1>
    <div class = "posts">
    <a href='/posts/create'>create</a>
        @foreach ($posts as $post)
            <div class="post">
                <h2 class="title">
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                <p class="body">{{$post->body}}</p>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
        @endforeach
    </div>    
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
</body>
</html>
