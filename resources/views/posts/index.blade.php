<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Blog</title>
</head>
<x-app-layout>
        <x-slot name="header">
            <h1>BLOG</h1>
        </x-slot>
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
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
        @endforeach
        <p>ログインユーザー；{{ Auth::user()->name }}</p>
    </div>    
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
<script>
    function deletePost(id) {
        'use strict'
        
        if (confirm('削除すると復元できません\n本当に削除しますか？'))　{
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>


</body>
</x-app-layout>
</html>
