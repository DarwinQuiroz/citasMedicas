@extends('layouts.dashboard')

@section('content')
<div class="card bg-default shadow">
    <div class="card-header bg-transparent border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0 text-white">Especialidades</h3>
        </div>
        <div class="col text-right">
            <a href="{{ route('specialties.create') }}" class="btn btn-sm btn-success">
                Crear Especialidad
            </a>
        </div>
        </div>
    </div>
    @if (session('notification'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: "{{ session('notification')}}"
            })
        </script>
        {{-- <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <span class="alert-inner--text">{{ session('notification')}}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
    @endif
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Ocipones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($specialties as $item)
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td class="">{{ $item->description }}</td>
                        <td>
                            {!! Form::open(['route' => ['specialties.destroy', Crypt::encrypt($item->id)], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
                                <a href="{{ route('specialties.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">Editar</a>
                                {{-- {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!} --}}
                                <button type="button" onclick="eliminar()" class="btn btn-sm btn-danger">Eliminar</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            {{ $specialties->links() }}
        </div>
    </div>
</div>
@endsection
