<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->id }}">
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
</x-layout>
