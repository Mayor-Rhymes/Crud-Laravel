<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //



    public function index(){

        return view('notes.index', [

            "notes" => Note::all()
        ]);
    }


    public function create(Note $note){

        return view('notes.create', [


            'note' => $note
        ]);
    
    }


    public function destroy(Note $note){


        if($note){

            $note->delete();
    
    
            return redirect('/');
        }
        
    }


    public function show(Note $note){


        return view('notes.show', [

            'note' => $note
        ]);
    }


    public function store(Request $request){

        $formFields = $request->validate([


            "title" => "required",
            "content" => "required"
        ]);
    


        $formFields["user_id"] = auth()->id();
        Note::create($formFields);
    
        return redirect('/')->with('message', 'Note has been created successfully');

    }



    public function edit(Note $note){

        return view('notes.edit', [


            'note' => $note
        ]);

    }


    public function update(Request $request, Note $note){

        if($note){

            $formFields = $request->validate([
    
    
                "title" => "required",
                "content" => "required"
            ]);
    
    
            $note->update($formFields);
    
            return redirect('/');
        
         }
    }



    public function manage(){

        return view('notes.manage', [

            'notes' => auth()->user()->notes
        ]);

    }
}
