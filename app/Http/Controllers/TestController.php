<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($building = '建物です')
    {
        return $building;
    }

    public function nom($param)
    {
        return '部屋番号は' .$param. 'です';

    }
}
