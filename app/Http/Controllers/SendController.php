<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SendController extends Controller
{

    public function index()
    {
        //return view('send');
        $Chats = array();
        if ($file = fopen("ChatHistory.txt", "r")) {
            while(!feof($file)) {
                $line = fgets($file);
                array_push($Chats,$line);
                # do same stuff with the $line
            }
            fclose($file);
        }
        return view("send")->with('chats', $Chats);
        
    }
    public function send(Request $request)
    {
        
        if ($request->has('MessageContent')) {
            $r = $request -> MessageContent;
            $myfile = fopen("ChatHistory.txt", "a");
            fwrite($myfile, $r."\n");
            fclose($myfile);
            //$content = file_get_contents("ChatHistory.txt","\n");
            //echo $content;
            $Chats = array();
            if ($file = fopen("ChatHistory.txt", "r")) {
                while(!feof($file)) {
                    $line = fgets($file);
                    array_push($Chats,$line);
                    # do same stuff with the $line
                }
                fclose($file);
            }
            //array_push($ChatContent,$r);
           
            //foreach ($ChatContent as $Content) {
                //echo $Content;
                //echo '<br>';
            //}

            return Redirect::route('send.index')->with('chats', $Chats);
        } else{
            //echo "Not found";
            return Redirect::route('send.index')->with('chats', $Chats);
        }
    }
}
