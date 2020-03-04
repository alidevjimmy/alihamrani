<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:11',
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        Contact::create($validatedData);
        return redirect(route('index'))->with([
            'status' => 'success',
            'message' => 'پیغام با موفقیت ارسال شد'
        ]);
    }
}
