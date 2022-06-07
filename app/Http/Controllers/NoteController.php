<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function view()
    {
        $notes = Note::all();

        return view('view', ['notes' => $notes]);
    }

    public function add()
    {
        return view('add');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect('/')->with('status', 'Note has been successfully deleted.');
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('edit', ['note' => $note]);
    }

    public function create(Request $request)
    {
        $post = new Note;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Note has been successfully created.');
    }

    public function create_update(Request $request)
    {        
        $post = new Note;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Note has been successfully updates.');
    }
}
