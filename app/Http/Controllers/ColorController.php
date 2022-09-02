<?php

namespace App\Http\Controllers;

require base_path('vendor/autoload.php'); 

use Illuminate\Http\Request;
use ourcodeworld\NameThatColor\ColorInterpreter;

class ColorController extends Controller
{
    //
    public function convert($hexcode)
    {
        $instance = new ColorInterpreter();

        $result = $instance->name($hexcode);

        return response()->json(["hex" => $result["hex"], "name" => $result["name"]], 200);
    }
    public function hello()
    {
        return response()->json(["message" => "Hello World from Laravel & Docker"], 200);
    }
}
