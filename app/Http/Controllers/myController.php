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

}
