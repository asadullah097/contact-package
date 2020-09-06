<?php

namespace Asadlaravel\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Asadlaravel\Contact\Mail\ContactMailable;
use Mail;
class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name,
       $request->subject,$request->message));
        return \back();
    }
}
