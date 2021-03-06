<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required'
            ]);
        $message = new Message();
        $message -> name = $request -> input('name');
        $message -> email = $request -> input('email');
        $message -> message = $request -> input('message');

        $message -> save();

        return redirect('/messages') -> with('success', 'Message Sent.');
    }

    public function getMessages()
    {
        $messages = Message::all();
        return view('messages') -> with('messages', $messages);
    }

}
