<?php

namespace App\Http\Controllers;
use App\Models\cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{


    public function cvcreate(){
        return view('cvinput');
    }


    public function inputcreation( Request $request){


        //Check of de cv al gemaakt is
        if ( Auth::user()->cv !== 0){
            return 'U heeft al een cv';
        }
        else{
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
        $cv->users_id = Auth::user()->id;
        $cv->save();

        $user = Auth::user();
        $user->cv= 1;
        $user->name = Auth::user()->name;
        $user->save();

        return redirect('/');
    }}

    public function cvsingle($id){
        $cv = cv::find($id);
        return view ('cvsingle', ['cv' => $cv]);
    }

    public function download($id){
        $cv = cv::find($id);
        return Storage::disk('public')->download($cv->afbeelding);
    }
}
