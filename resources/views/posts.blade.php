<x-layout :title="$title">

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a class="hover:underline" href="/posts/{{ $post['slug'] }}">
                <h2 class="mb-1 font-bold text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> |
                27
                Agustus 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
            <a class="text-blue-500 hover:underline font-medium" href="/posts/{{ $post['slug'] }}">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
