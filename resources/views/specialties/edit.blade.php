@extends('layouts.dashboard')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Especialid</h3>
        </div>
        <div class="col text-right">
            <a href="{{ route('specialties.index') }}" class="btn btn-sm btn-default">
                Volver
            </a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @include('includes.errors')
        {!! Form::model($specialty, ['route' => ['specialties.update', Crypt::encrypt($specialty->id)], 'method' => 'PUT']) !!}
            @include('specialties.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection
