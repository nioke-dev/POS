<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $activeNavItem = 'penjualan';
        return view('sales.index', compact('activeNavItem'));
    }
}
