<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function index()
    {
      return view('projects.create');
    }
    public function store()
}
