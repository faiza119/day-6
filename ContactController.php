<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function handleForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        return view('submitted', [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
    }
}
