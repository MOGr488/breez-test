<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\dptdt;

use Illuminate\Http\Request;
use App\Models\department;

class DepartmentsController extends Controller
{
    function show(){
            $departments = department::all();
            return view('departmentslist',['department'=>$departments]);
        // return view('list');
        
    }
}
