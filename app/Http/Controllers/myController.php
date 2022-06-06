<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
   
    function countPalindromeStrings($strings){
    
    $count = 0;

    foreach($strings as $string) {
    
        if(strrev($string) === $string) {
    
            $count++;
   
        }

    }


    echo $count;

    }

    function howManySeconds(){

        $d1 = new DateTime("1732-4-14 00:00:00");

        $now=date();

        $interval = $d1->diff($now);
        
        $diffInSeconds = $interval->s;
        
        return $diffInSeconds;

    }

    function getText(){

        $json_string = file_get_contents('https://icanhazdadjoke.com/slack');

        $obj = json_decode($json_string);

        $result = array_filter($arr['attachments'], function($array) {
            return $array['text'] ;
          });

    }

}
