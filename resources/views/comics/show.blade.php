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
                    <div class="card-body position-relative">
                        <div class="actions position-absolute top-0 end-0">
                            <a class="btn btn-primary" href="{{route('comics.edit',$comic->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-comic-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete comic "<span class="text-primary">{{$comic->title}}</span>" </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger" type="submit" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
