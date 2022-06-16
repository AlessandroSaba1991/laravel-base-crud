@extends('layouts.app')
@section('title-page', 'Homepage')
@section('content')
<div class="p-5 bg-primary text-white">
    <div class="container">
        <h1 class="display-3">Homepage Comics</h1>
        <p class="lead">Click the button for view Comics</p>
        <p class="lead">
            <a class="btn btn-warning btn-lg" href="{{route('comics.index')}}">Comics List</a>
        </p>
    </div>
</div>
<section class="preview py-5">
    <div class="container">
        <h2 class="text-center p-2 bg-warning text-white my-3">Preview Comics</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @forelse($comics as $comic)
            <div class="col">
                <div class="card">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                    <div class="card-body">
                        <h3>{{$comic->series}}</h3>
                        <p class="text-danger">€{{$comic->price}}</p>
                    </div>
                    <a class="btn btn-primary" href="{{route('comics.show',$comic->id)}}">More Details</a>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Nothing Comics</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
