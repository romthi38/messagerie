@extends('layouts.app')

@section('content')

<div class="container"><br><br>
    <div class="row">
        <form class="col s6 offset-s3" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" id="username" name="username" class="validate" value="{{ old('username') }}" required>
                    <label for="username">Identifiant</label>
                    @if ($errors->has('username'))
                        <div class="card-panel">
                            <span class="blue-text text-darken-2">{{ $errors->first('username') }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" id="password" name="password" class="validate" required>
                    <label for="password">Mot de passe</label>
                    @if ($errors->has('password'))
                        <div class="card-panel">
                            <span class="blue-text text-darken-2">{{ $errors->first('password') }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : ''}} />
                    <label for="remember">Se souvenir de moi</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
                <div class="input-field col s6">
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Mot de passe oublié ?</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
