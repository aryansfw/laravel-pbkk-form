<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller {

    public function index() {
        return view('form');
    }

    public function submit(Request $request) {
        $request->validate([
            'name' => 'required|alpha:ascii',
            'email' => 'required|email:rfc',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
            'number' => 'required|numeric|between:2.50,99.99',
        ]);


        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $request->image->getClientOriginalName(),
            'number' => $request->number,
        ];
        
        return redirect('/result')->with(['results' => $results, 'success' => 'Submission Successful']);
    }

    public function result() {
        $results = session()->get('results');

        return view('result')->with(['results' => $results, 'success' => 'Submission Successful']);
    }
}