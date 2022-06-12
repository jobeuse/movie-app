<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            
                //latest movies
            $popularTv=Http::get('https://api.themoviedb.org/3/tv/popular?api_key=698e2ed7adec5c43d05f615374de9c46')['results'];

            $genres=Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=698e2ed7adec5c43d05f615374de9c46')['genres'];
            
            //changing genres to id as key and name as value

            $genres = collect($genres)
            ->mapWithKeys(function ($genre){
                    return [$genre['id']=>$genre['name']];
            }); 
            //now playing movies
            $TopRatedTv=Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=698e2ed7adec5c43d05f615374de9c46')['results'];



    } catch (\Throwable $th) {
        return redirect()->route('welcome')->with('error','Error occurec while accessing movies');
    }

        return view('tv.index',compact('popularTv','genres','TopRatedTv'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //latest movies
        $Tvshow=Http::get('https://api.themoviedb.org/3/tv/'.$id.'?api_key=698e2ed7adec5c43d05f615374de9c46&append_to_response=videos,images,credits')->json();
            if (!empty($movie)) {
                return back()->with('error','Error occurec while accessing tvshow');
            }
        } catch (\Throwable $th) {
            return redirect()->route('welcome')->with('error','Error occurec while accessing tvshows');
        }
      return view('tv.show',compact('Tvshow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
