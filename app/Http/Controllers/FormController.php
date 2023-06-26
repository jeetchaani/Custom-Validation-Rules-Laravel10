<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\upperCase;

class FormController extends Controller
{
    public function submit(Request $request){
         
        $validateData=$request->validate([
            'email'=>['required', 'email', new upperCase()]
        ]);
        return true;
    }
}
