<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Ecole;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    public function index()
    {
        $ecoles = Ecole::all();
        return view('ecoles.list', compact('ecoles'));
    }

    public function create()
    {
        return view('ecoles.create');
    }
}
