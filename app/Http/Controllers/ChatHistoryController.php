<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatHistoryController extends Controller
{
    //
    public function index(){
        $Chats = array();
        if ($file = fopen("ChatHistory.txt", "r")) {
            while(!feof($file)) {
                $line = fgets($file);
                array_push($Chats,$line);
                # do same stuff with the $line
            }
            fclose($file);
        }
        return response()->json($Chats);
        
    }

    public function write(Request $request){
        echo $request['message'];
        $myfile = fopen("ChatHistory.txt", "a");
        fwrite($myfile, $request['message']."\n");
        fclose($myfile);
        
    }
}
