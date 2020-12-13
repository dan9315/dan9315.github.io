<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($id, $old)
    {
        $result = null;
        if($old >= 18){
            $result = "DEO DI TU DAU";
        }else{
            $result = "chet cmmr";
        }
        return view('index', ['name' => 'Phong', 'class' => '18CDTH41', 'id' => $id, 'old' => $result]);
    }
    //
}
