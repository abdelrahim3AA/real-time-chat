<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatEvent;
use App\Models\User;
use Auth;

class ChatController extends Controller
{
    public function chat()
    {
        return view('chat');
    }

    public function send(Request $request)
    {
        $user = User::find(Auth::id()); 
        event(new ChatEvent($request->message, $user));
    }
}
