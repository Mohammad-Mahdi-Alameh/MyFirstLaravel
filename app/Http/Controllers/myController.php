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

}
