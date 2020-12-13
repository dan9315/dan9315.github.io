<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        echo "ok da vao";
    }
    public function create()
    {
        echo " create";
    }
    public function edit($id)
    {
        echo " edit id da chon ";
    }
    public function delete($id)
    {
        echo "delete id da chon";
    }
    public function update($id)
    {
        echo "update id da chon";
    }
}
