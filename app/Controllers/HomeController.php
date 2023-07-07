<?php

namespace App\Controllers;

use App\Services\Calculator;

class HomeController
{
    public function index()
    {
        $calculator = new Calculator();

        return $calculator->add(5, 2);
    }

}