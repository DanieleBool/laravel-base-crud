@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">Modifica un fumetto</h1>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="6">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">Serie:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <select class="custom-select form-control text-secondary" id="type" name="type">
                <option value="comic book" {{$comic->type == "comic book" ? "selected" : ""}}>comic book</option>
                <option value="graphic novel" {{$comic->type == "graphic novel" ? "selected" : ""}}>graphic novel</option>
            </select>
        </div>
        



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection 