<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArrayTest extends Controller
{
    //数组的键值和键名
    public function arrayValue(){
        $a = [
            'size' => 'S',
            'color' => 'gold',
        ];

        var_dump($a);
    }


    public function arrayKey() {

    }
}
