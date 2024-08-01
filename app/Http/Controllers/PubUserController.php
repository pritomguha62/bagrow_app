<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PubUserController extends Controller
{

    public function home() {
        return view('pub_views/home');
    }

    public function contact_us() {
        return view('pub_views/contact_us');
    }

    public function contact_us_info(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        $subject = "A person want to contact with you.";
        $body =
        '
        Name : '.$request->name.'<br>
        Email : '.$request->email.'<br>
        Phone : '.$request->phone.'<br>
        Message : '.$request->message;
        Mail::to('pritomguha62@gmail.com')->send(new SendMail($subject, $body));

        return redirect()->back()->with('success','Message successfully sent..');

    }













}


