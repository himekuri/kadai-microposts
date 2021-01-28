@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favorited($micropost->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavorite', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id],]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif