@extends('layouts.app')
@section('title-page', 'Single Comic')
@section('content')
<div class="p-5 bg-primary text-white">
    <div class="container">
        <h1 class="display-3">{{$comic->title}}</h1>
    </div>
</div>
<section class="comic py-5">
    <div class="container py-5">
        <div class="card h-100 my-5">
            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                </div>
                <div class="col-10">
                    <div class="card-body">
                        <h3>Series: {{$comic->series}}</h3>
                        <p class="text-danger">€{{$comic->price}}</p>
                        <p>
                            <strong>
                                Date Release:
                            </strong>
                            {{DateTime::createFromFormat('Y-m-d',$comic->sale_date)->format('d/M/Y')}}
                        </p>
                        <p>
                            <strong>
                                Type:
                            </strong>
                            {{$comic->type}}
                        </p>
                        <p>
                            <strong>
                                Overview:
                            </strong>
                            {{$comic->description}}
                        </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" href="{{route('comics.index')}}">Come back to Comics</a>
        </div>
    </div>
</section>
@endsection
