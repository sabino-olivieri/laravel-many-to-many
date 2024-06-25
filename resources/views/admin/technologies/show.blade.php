@extends('layouts.admin')

@section('content')
    <div class="container ">
        
        <div class="col-12 my-3 d-flex justify-content-between">
            <h2 class="m-0">{{ $technology->name }}</h2> 
            <div>
                <a class="btn btn-success" href="{{route('admin.technology.edit', ['technology' => $technology->slug])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="{{route('admin.technology.destroy', ['technology' => $technology->slug])}}" method="post" class="d-inline-block ">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
            </div>

        </div>
        <div class="d-flex gap-3">
            <span>Colore: </span>
            <span class="tag-bg" style="background-color: {{$technology->color}} "></span>

        </div>        <span class="badge" style="background-color: {{$technology->color}} " >{{$technology->name}}</span>
    </div>

    @include('admin.projects.partials.toast')
@endsection