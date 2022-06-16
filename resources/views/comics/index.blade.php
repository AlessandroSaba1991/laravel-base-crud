@extends('layouts.app')
@section('title-page', 'Comics')
@section('content')
<div class="p-5 bg-primary text-white">
    <div class="container">
        <h1 class="display-3">Comics</h1>
        <p class="lead">All Comics</p>
    </div>
</div>
<section class="comics py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse($comics as $comic)
            <div class="col">
                <div class="card h-100">
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
