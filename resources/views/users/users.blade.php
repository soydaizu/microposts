@if (count($users) > 0)
<ul class="media-list">
    @foreach ($users as $user)
        <li class="media">
            <div class=""></div>
            <div class="media-left">
                <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 70) }}" alt="">
            </div>
            <div class="media-body">
                <div>
                    <p>{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!}</p>
                </div>
                <div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        @include('user_follow.follow_button', ['user' => $user])
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{!! $users->render() !!}
@endif