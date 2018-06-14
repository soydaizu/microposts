@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <!--<aside class="col-md-4">-->
            <!--</aside>-->
            <div class="col-xs-10 col-xs-offset-1 ">
                {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                {!! Form::close() !!}
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs--offset-8 col-sm-offset-8 col-md-offset-8 col-lg-offset-8">
                    <div align="center">
                        <div style="background-color: #f0f8ff;"><br>
                            <p>Find new Users?</p>
                            {!! link_to_route('users.index', 'Click Here!', null, ['class' => 'btn btn-info']) !!}
                            <br><br>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection