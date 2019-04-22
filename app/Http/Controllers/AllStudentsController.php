<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllStudentsController extends Controller
{
    public function allstudent(){
        return view('admin.allstudent');
    }
}
