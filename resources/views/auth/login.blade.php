@extends('layouts.auth')

@section('title', 'Inicio de Sesión')
@section('subtitle', __('Enter your information to login'))

@section('content')
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-inner--icon">
                        <i class="ni ni-like-2"></i>
                    </span>
                    <span class="alert-inner--text">
                        {{ $errors->first() }}
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                    </div>
                </div>

                <div class="form-group @error('password') has-danger @enderror">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="current-password">
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                        <span class="text-muted">{{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
                </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-light">
                        <small>{{ __('Forgot Your Password?') }}</small>
                    </a>
                @endif
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('register') }}" class="text-light"><small>¿Aú no te has registrado?</small></a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
