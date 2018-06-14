@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFav', ['class' => "btn btn-warning btn-block btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Fav', ['class' => "btn btn-default btn-block btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif