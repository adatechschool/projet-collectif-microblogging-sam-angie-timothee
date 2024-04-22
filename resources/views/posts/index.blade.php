<div class="container">
    <h1>Tous les posts</h1>

    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
            </div>
            <a href="{{route('posts.show', $post->id) }}">Voir le post</a>
        </div>

    @endforeach
</div>

