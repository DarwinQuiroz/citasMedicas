@extends('layouts.auth')

@section('title', 'Registro de Usuario')
@section('subtitle', 'Ingresa tus datos para registrarte')

@section('content')
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    @include('includes.errors')
                    <form role="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('ID Card') }}" type="text" id="cedula" name="cedula" value="{{ old('cedula') }}" required autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('Name') }}" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('E-Mail Address') }}" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-shop"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('Address') }}" type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('Cellphone') }}" type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('Password') }}" type="password" id="password" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
