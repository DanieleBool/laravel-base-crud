@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">{{$comic->title}}</h1>
    <div class="d-flex mt-5">
        <div class="col-3 text-center">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <div class="col-9">
            <ul class="list-group">
                <li class="list-group-item">Descrizione: {{$comic->description}}</li>
                <li class="list-group-item">Prezzo: {{$comic->price}}</li>
                <li class="list-group-item">Serie: {{$comic->series}}</li>
                <li class="list-group-item">Data: {{$comic->sale_date}}</li>
                <li class="list-group-item">Tipo: {{$comic->type}}</li>
            </ul>
            <div class="my-4">
                <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
            </div>
        </div>
    </div>
    
    
@endsection 