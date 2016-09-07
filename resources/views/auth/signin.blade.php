@extends('main')

@section('title', 'Sign in')

@section('content')

    <h3>Sign in</h3>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-vertical" action="{{ route('auth.signin') }}" method="post">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
                    <label class="control-label" for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">

                    @if ( $errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-control{{ $errors->has('password') ? ' has-error' : "" }}">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">

                    @if ( $errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif

                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>

                {{ csrf_field() }}

            </form>
        </div>
    </div>

@stop
