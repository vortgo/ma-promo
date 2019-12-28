<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendFeedback(Request $request)
    {
        $token = config('services.telegram.bot_key');
        $chat = config('services.telegram.chat_id');

        $data = [
            'text' => "email: {$request->get('email')}\nmessage: {$request->get('text')}",
            'chat_id' => $chat
        ];

        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    }
}
