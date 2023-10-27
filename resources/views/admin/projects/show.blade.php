@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container mt-5">
    
    <h1 class="my-5">
        {{$project->title}}
    </h1>
    <hr>
    @include('partials._navbtn')
    <hr>
    <p>
        <strong>Slug:</strong>
        <br>
        {{$project->slug}}
    </p>

    <p>
        <strong>Type:</strong>
        <br>
        {{$project->type?->label}}
    </p>
    <p>
        <strong>Description:</strong>
        <br>
        {{$project->description}}
    </p>
    <p>
        <strong>Created on:</strong>
        <br>
        {{$project->created_at}}
    </p>
    <p>
        <strong>Last Update:</strong>
        <br>
        {{$project->updated_at}}
    </p>

</div>

<div class="modal fade" tabindex="-1" id="modal-{{$project->id}}">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header red-strip">
          <h5 class="modal-title">DELETE FROM DATABASE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            <strong class="text-danger text-align-center">W A R N I N G</strong> <br>
            <hr>

            <p> Are you shure you want to delete permanently:
                <br>
                <strong>
                    ' {{$project->title}} ' 
                </strong>
                <br>
                <strong>
                    ID :
                </strong>
                 {{$project->id}}
                <br>
                 from the database?</p>
            <p class="text-danger">THIS ACTION IS IRREVERIBLE</p>

            <hr>
            
            <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="send" class="btn btn-outline-danger"><strong>DELETE</strong></button>
            </form>
        </div>
        <div class="modal-footer red-strip"">
        </div>
@endsection