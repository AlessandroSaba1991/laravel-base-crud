@extends('layouts.app')
@section('title-page', 'Edit Comics')
@section('content')
<div class="p-5 bg-primary text-white">
    <div class="container">
        <h1 class="display-3">Edit {{$comic->title}}</h1>
        <p class="lead">Compile form for edit a comic</p>
    </div>
</div>
<div class="container py-5 ">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="bg-light mt-5 p-3" action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title" aria-describedby="helpTitle" value="{{$comic->title}}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Insert series" aria-describedby="helpseries" value="{{$comic->series}}">
                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Insert thumb Https://" aria-describedby="helpthumb" value="{{$comic->thumb}}">
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" aria-describedby="helpsale_date" value="{{$comic->sale_date}}">
                @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Insert type" aria-describedby="helptype" value="{{$comic->type}}">
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" step="0.01" max="100" aria-describedby="helpprice" value="{{$comic->price}}">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" rows="5" aria-describedby="descriptionHelper">{{$comic->description}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Comic</button>
    </form>
</div>
@endsection
