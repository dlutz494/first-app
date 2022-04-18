<!doctype html>

<title>Posts</title>
<link rel="stylesheet" href="/app.css">

<body>
@foreach ($posts as $post)
<article>
    <h1>
        <a href="/posts/{{ $post->slug }}">
            {{ $post->title }}
        </a>
    </h1>
    <p>
        {!! date('Y M d', $post->date) !!}
    </p>

    <div>
        {!! $post->excerpt !!}
    </div>
</article>
@endforeach
</body>
