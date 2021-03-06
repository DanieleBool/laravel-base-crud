@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">Edit comic</h1>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="6">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">Series:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Sale date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="custom-select form-control text-secondary" id="type" name="type">
                <option value="comic book" {{$comic->type == "comic book" ? "selected" : ""}}>comic book</option>
                <option value="graphic novel" {{$comic->type == "graphic novel" ? "selected" : ""}}>graphic novel</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection 