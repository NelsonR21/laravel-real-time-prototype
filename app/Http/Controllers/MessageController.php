<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Events\NewMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function fetch ()
    {
        return Message::paginate(40);
    }

    public function sentMessage (Request $request)
    {
        $message = Message::create([
            'message' => $request->message,
            'date' => Carbon::now()
        ]);
        event(new NewMessage($message));
    }
}
