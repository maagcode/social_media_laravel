@extends('main')

@section('title', 'Sign up')


@section('content')

    <div class="row">
        <div class="col-md-6">
            <form class="form-vertical" action="{{ route('auth.signup') }}" role="form" method="post">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
                    <label for="email" class="control-label">Enter your Email Address</label>
                    <input type="text" name="email" class="form-control" id="email" value="">

                    @if ( $errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : "" }}">
                    <label for="username" class="control-label">Enter your Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="">

                    @if ( $errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : "" }}">
                    <label for="password" class="control-label">Enter your password</label>
                    <input type="password" name="password" class="form-control" id="password" value="">

                    @if ( $errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif

                </div>

                <div class="form-group">
                    <button type="submit" name="signup" class="btn btn-default">Sign up</button>
                </div>

                {{ csrf_field() }}

            </form>
        </div>
    </div>

@stop
