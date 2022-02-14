@extends('layout.base')

@section('pageContent')
    
<h1 class="my-4 text-center">Comics 📚</h1>
<div class="text-center mt-4">
    <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Add</button></a>
</div>
<table class="table my-4 border">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale date</th>
            <th scope="col">Genre</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <div>
                    <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Open</button></a>
                </div>
                <div class="my-2">
                    <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                </div>
                <div>
                    <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection 