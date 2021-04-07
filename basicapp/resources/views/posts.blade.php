<x-guest-layout>
    <div class="mt-16">
        @foreach ($posts as $post)
            <div class="border border-black mb-2 flex justify-center items-center flex-col p-3">
                <h1 class="text-2xl">{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <a class="hover:underline" href="{{route('public_posts_show', $post->id)}}">View</a>
            </div>
        @endforeach
    </div>
</x-guest-layout>
