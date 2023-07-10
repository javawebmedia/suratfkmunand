<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dasbor extends Controller
{
    // index
    public function index()
    {
        $data = [   'title'     => 'Login Administrator',
                    'content'   => 'admin/dasbor/index'
                ];
        return view('admin/layout/wrapper',$data);
    }
}
