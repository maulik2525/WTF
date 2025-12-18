<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ShopscoController extends Controller
{
    function home(){
      return view('index');
    }
    function blog(){
      return view('blog');
    }
    function about(){
      return view('about');
    }
    function contact(){
      return view('contact');
    }


    public function contactdata(Request $request){
      $validated = $request->validate([
        'Name' => 'required|string',
        'Email' => 'required|email',
        'Message' => 'required|string',
      ]);

      Contact::create($validated);

      return back()->with('success','Enquiry submitted successfully!');
    }
} 
