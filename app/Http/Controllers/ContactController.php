<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ContactController extends Controller
{
    //
    function index(){
        return view('contact');
    }


    function contactSubmit(Request $request){
        //  @Dd($request->all());

        $validatedData = $request->vagitlidate([
            'name' => 'required|max:2|min:2 | string',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
            'subject.required' => 'Subject field is required.',
            'message.required' => 'Message field is required.'
        ]);
        @dd($validatedData);
       if($validatedData){
       
        }
        // if($validatedData){
        //     $result = Dd::($validatedData);
        // }
    }

}
