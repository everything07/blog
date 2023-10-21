<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Blog</title>
</head>
    <body>
        <h1>Blog Name</h1>
        <from action ="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。"></textarea>
            </div>
            <input type="submit" value="store"/>
  　     </from>
   　    <div class="footer">
            <a href="/">戻る</a>
    　  </div>
    </body>
</html>
