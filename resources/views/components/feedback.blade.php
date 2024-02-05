@props(['posts'])
@forelse ($posts as $post)
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">{{$post->name}}</h5>
            <p class="card-text">{{$post->feedback}}</p>
            <p>{{$post->created_at}}</p>
        </div>
    </div>
@empty
    <div class="card w-75 mb-3">
        <div class="card-body">
            <p>Отзывов пока нет</p>
        </div>
    </div>
@endforelse





