@extends('layout')

@section('dashboard-content')

@if (Session::get('deleted'))
    <div class="alert alert-danger alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('deleted')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

@if (Session::get('delete-failed'))
    <div class="alert alert-warning alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('delete-failed')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif


    <h1>Estudiante List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nombre del Estudiante</th>
                        <th>Numero de control</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nombre del Estudiante</th>
                        <th>Numero de control</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->numControl}}</td>
                        <td>{{$estudiante->carrera}}</td>
                        <td>
                            <a href="{{URL::to('edit-estudiante')}}/{{$estudiante->id}}" class="btn btn-outline-primary btn-sm">Edit</a> |
                            <a href="{{URL::to('delete-estudiante')}}/{{$estudiante->id}}" class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<script>
    function checkDelete(){
        var check = confirm("Are you sure you want to delete this?");
        if(check){
            return true;
        }
        return false;
    }   
</script>

@stop