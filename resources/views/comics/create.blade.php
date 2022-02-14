@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">New comic</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insert title">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Insert description"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert thumb">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insert price">
        </div>
        <div class="form-group">
            <label for="series">Series:</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Insert series">
        </div>
        <div class="form-group">
            <label for="sale_date">Sale date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert date, format AAAA/MM/GG">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="custom-select form-control text-secondary" id="type" name="type">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
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