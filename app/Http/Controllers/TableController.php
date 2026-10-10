<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.table.index');
    }

    public function create()
    {
        return view('admin.table.create');
    }
}
