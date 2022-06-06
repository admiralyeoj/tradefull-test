<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function create(Request $request)
    {
        $post = new Note;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Note has been successfully created.');
    }

    public function update(Request $request)
    {
        $post = new Note;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Note has been successfully updates.');
    }
}
