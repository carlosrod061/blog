@extends('layout')
@section('dashboard-content')
<h1>Create estudiante form</h1>
@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

@if (Session::get('failed'))
    <div class="alert alert-warning alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('failed')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

<form action="{{URL::to('post-estudiante-form')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="estudianteName" class="mt-2">Nombre del estudiante:</label>
        <input type="text" class="form-control mt-1" id="nombre" placeholder="Ingrese el nombre" name="nombre">
        <label for="estudianteNumeroControl"  class="mt-2">No Control:</label>
        <input type="text" class="form-control mt-1" id="numControl" placeholder="Ingrese el numero de control" name="numControl">
        <label for="estudianteCarrera"  class="mt-2">Nombre de la Carrera:</label>
        <input type="text" class="form-control mt-1" id="carrera" placeholder="Ingrese la carrera" name="carrera">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Crear</button>
</form>
@stop