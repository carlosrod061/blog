@extends('layout')
@section('dashboard-content')
<h1>Edit estudiante form</h1>
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

<form action="{{URL::to('update-estudiante-form')}}/{{$estudiante->id}}" method="post">
    @csrf
    <div class="form-group">
        <label for="estudianteName">Nombre del estudiante:</label>
        <input type="text" class="form-control mt-3"
        id="nombre" value="{{$estudiante->nombre}}" placeholder="Ingrese el Nombre" name="nombre">
        <label for="numControl">Numero de control</label>
        <input type="text" class="form-control mt-3"
        id="numControl" value="{{$estudiante->numControl}}" placeholder="Ingrese el numero de control" name="numControl">
        <label for="estudianteCarrera">Carrera:</label>
        <input type="text" class="form-control mt-3"
        id="carrera" value="{{$estudiante->carrera}}" placeholder="Ingrese la carrera" name="carrera">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@stop