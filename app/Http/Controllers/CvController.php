<?php

namespace App\Http\Controllers;
use App\Models\cv;
use Illuminate\Http\Request;

class CvController extends Controller
{


    public function cvcreate(){
        return view('cvinput');
    }


    public function inputcreation( Request $request){

        //Hier de benodigdheden opslaan
        $cvdata = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'afbeelding' => 'image'
        ]);

        $newFilename = $cvdata['afbeelding']->store('fotos', 'public');
        $cvdata['afbeelding'] = $newFilename;


        //Alle info halen om een Cv te migraten
        $cv = new cv();
        //Laat zien welke informatie je wilt zien
        $cv->title= $cvdata['title'];
        $cv->description= $cvdata['description'];
        $cv->afbeelding = $cvdata['afbeelding'];

        $cv->save();

        return redirect('/');
    }
}
