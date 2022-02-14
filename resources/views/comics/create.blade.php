@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">Aggiungi un fumetto</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo...">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Inserisci la descrizione..."></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la copertina...">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo...">
        </div>
        <div class="form-group">
            <label for="series">Serie:</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie...">
        </div>
        <div class="form-group">
            <label for="sale_date">Data:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data nel formato AAAA/MM/GG...">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <select class="custom-select form-control text-secondary" id="type" name="type">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
        </div>
        



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection 