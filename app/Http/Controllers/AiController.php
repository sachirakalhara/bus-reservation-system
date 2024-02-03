<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Environment\Environment;
use OpenAI;

class AiController extends Controller
{
    public function index(){
        return view('chat.chatai');


        
        // $apiKey = env('OpenAI');

        // $client = OpenAI::client($apiKey);

        // $result = $client->chat()->create([
        //     'model' => 'gpt-3.5',
        //     'messages' => [
        //         ['role' => 'user', 'content' => 'Hello!'],
        //     ],
        // ]);

        // echo $result->choices[0]->message->content;
    }
}
