<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        //  return $request->input('name');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        // return 'success';
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect('/');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages', $messages); 
    }
}
