<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class MyController extends Controller
{

    public function index()
    {
        $alladmin = Admin::all();
        return view('admin.index', compact('alladmin'));
    }
}
