<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function testApi(){
        return response()->json([
            "message"=>'hello world'
        ]);

    }
}
