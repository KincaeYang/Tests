<?php

namespace App\Http\Controllers\Language;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function index($type)
    {
        return view('test.'.$type.'.index');
    }
}
