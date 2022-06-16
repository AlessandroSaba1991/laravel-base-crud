@extends('layouts.app')
@section('title-page', 'Create Comics')
@section('content')
<div class="p-5 bg-primary text-white">
    <div class="container">
        <h1 class="display-3">Create Comics</h1>
        <p class="lead">Compile form for create a comic</p>
    </div>
</div>
<div class="container py-5 ">
    <form class="bg-light mt-5 p-3" action="{{route('comics.store')}}" method="post">
    @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert Title" aria-describedby="helpTitle">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Insert series" aria-describedby="helpseries">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert thumb Https://" aria-describedby="helpthumb">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" aria-describedby="helpsale_date">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Insert type" aria-describedby="helptype">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" max="100" aria-describedby="helpprice">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="description" rows="5" aria-describedby="descriptionHelper"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Comic</button>
    </form>
</div>
@endsection

