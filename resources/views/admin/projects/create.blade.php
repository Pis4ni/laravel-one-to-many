@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@endsection
@section('content')
<div class="container mt-5">

    <h1 class="my-5">
        Create New Project
    </h1>

    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary me-3 py-0">Back to list</a>
    @if ($errors->any())
    <div class="alert alert-danger bg-danger-subtle bg-gradient my-5">

        <h4> <i class="fa-solid fa-triangle-exclamation fa-beat"></i> Correggi i seguenti errori per proseguire:</h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <hr>
    <form action="{{ route('admin.projects.store') }}" method="post">
        
        @csrf

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        {{-- <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div> --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>


        <button type="submit" class="btn btn-outline-success">Save</button>
        

        {{-- <div class="mb-3">
            <label for=""></label>
            <input type="text" class="form-control" id="" name="">
        </div> --}}

    
    </form>

</div>
@endsection
{{-- {{$project->title}}
{{$project->slug}}
{{$project->created_at}}
{{$project->updated_at}}
{{$project->slug}}
{{$project->created_at}} --}}