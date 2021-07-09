@extends('layout')

@section('dashboard-content')

@if (Session::get('destroy'))
    <div class="alert alert-danger alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('deleted')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

@if (Session::get('destroy-failed'))
    <div class="alert alert-warning alert-dismissible fade show"
    role="alert" id="gone">
    <strong>{{Session::get('delete-failed')}}</strong>
    <button type="button" class="close" data-dismiss="alert"
    aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif


    <h1>Blog Post List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Featured Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($blogPosts as $blogPost)
                    <tr>
                        <td>{{$blogPost->title}}</td>
                        <td>{{$blogPost->details}}</td>
                        <td><img src="{{$blogPost->featured_image_url}}" width="100" height="100"></td>
                        <td>
                            <a href="{{URL::to('edit-blog-post')}}/{{$blogPost->id}}" class="btn btn-outline-primary btn-sm">Edit</a> |
                            <a href="{{URL::to('delete-blog-post')}}/{{$blogPost->id}}" class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete</a>
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