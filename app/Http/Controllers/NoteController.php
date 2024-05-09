<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    
    public function index()
    {
        $notes = Note::paginate(10);
        return view('note.index' , ['notes'=>$notes]);

    }

    
    public function create()
    {
        return view('note.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'note'=>['required','string']
        ]);

        $data['user_id'] = 1;
        $note = Note::create($data);

        return to_route('note.show',$note)->with('message','Note Was created Successfully✔️');
    }

   
    public function show(Note $note)
    {
        return view('note.show',["note"=>$note]);
    }

    
    public function edit(Note $note)
    {
        return view('note.edit',["note"=>$note]);
    }

    
    public function update(Request $request, Note $note)
    {


        $data = $request->validate([
            'note'=>['required','string']
        ]);

        
        $note ->update($data);

        return to_route('note.show',$note)->with('message','Note Was created Successfully✔️');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return to_route('note.index');
    }
}
