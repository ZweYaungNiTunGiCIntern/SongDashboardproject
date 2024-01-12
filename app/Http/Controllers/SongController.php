<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('song.index',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('song.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'songname'=>'required',
            'singer'  => 'required',
            'author' => 'required',
            'published_year' => 'required'
        ]);
        $song = new Song();
        $song->songname = $request->songname;
        $song->singer = $request->singer;
        $song->author = $request->author;
        $song->published_year = $request->published_year;
        $song->save();
        return redirect()->route('song.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::findorFail($id);
        return view('song.detail',compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::findorFail($id);
        return view('song.edit',compact('song'));
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
        $validatedData = $request->validate([
            'songname'=>'required',
            'singer'  => 'required',
            'author' => 'required',
            'published_year' => 'required'
        ]);
        $song = Song::findorFail($id);
        $song->songname = $request->songname;
        $song->singer = $request->singer;
        $song->author = $request->author;
        $song->published_year = $request -> published_year;
        $song->update();
        return redirect()->route('song.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::findorFail($id);
        if($song){
            $song->delete();
        }
        return redirect()->route('song.index');
    }
}
