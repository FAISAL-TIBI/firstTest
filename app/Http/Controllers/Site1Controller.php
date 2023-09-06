<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index()
    {
         $numbers = [1, 2, 3, 4, 5];
         $age = 19;
        // foreach ($numbers as $n) {
        //     echo $n . ' ';
        // }
        // return '<br>index';
        // return view('index')->with('numbers' , $numbers)->with('age',$age); // 'numbers' == الاسم البرمحي يمكن تغييره
            return view('site1.home',compact('numbers','age')); // 'numbers' and 'age' there is not name but value as $number and $age >> 'age' = $age
            // $numbers = value , 'numbers' = name
        }


    function aboutus()
    {
        return view('site1.aboutus');
    }


    function services()
    {
        return view('site1.services');
    }

    function contactus()
    {
        return view('site1.contactus');
    }
}
