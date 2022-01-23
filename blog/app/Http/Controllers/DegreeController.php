<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;

class DegreeController extends Controller
{
    ///homepage about course
    public function index()
    {

        $degrees = Degree::all();
        dump($degrees);

        return view('degrees', compact('degrees'));
    }
}
