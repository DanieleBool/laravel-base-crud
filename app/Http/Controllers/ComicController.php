<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
  
        return view("comics.index", compact("comics"));
        dd($comics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        // $newComic = new Comic;
        // $newComic -> title = $data["title"];
        // $newComic -> description = $data["description"];
        // $newComic -> thumb = $data["thumb"];
        // $newComic -> price = $data["price"];
        // $newComic -> series = $data["series"];
        // $newComic -> sale_date = $data["sale_date"];
        // $newComic -> type = $data["type"]; 
        // $newComic -> save();
        //validazione
        $request->validate([
            "title" => "required|string|max:200",
            "description" => "nullable|string",
            "thumb" => "nullable|string|max:400|url",
            "price" => "required|numeric",
            "series" => "required|string|max:100",
            "sale_date" => "required|date",
            "type" => ["required",
                Rule::in(["comic book", "graphic novel"])
            ],
            // "type" => "required|string|max:50",
        ]);
        $newComic = Comic::create($data);
        return redirect()->route("comics.show", $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request -> all();
        $request -> validate([
            "title" => "required|string|max:200",
            "description" => "nullable|string",
            "thumb" => "nullable|string|max:400|url",
            "price" => "required|numeric",
            "series" => "required|string|max:100",
            "sale_date" => "required|date",
            "type" => ["required",
                Rule::in(["comic book", "graphic novel"])
            ],
        ]);

        $comic -> update($data);
    
        // $data = $request -> all();
        // $comic -> title = $data["title"];
        // $comic -> description = $data["description"];
        // $comic -> thumb = $data["thumb"];
        // $comic -> price = $data["price"];
        // $comic -> series = $data["series"];
        // $comic -> sale_date = $data["sale_date"];
        // $comic -> type = $data["type"]; 
        // $comic -> save();
  
        return redirect()->route("comics.show", $comic -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic -> delete();
        return redirect()->route("comics.index");
    }
}
