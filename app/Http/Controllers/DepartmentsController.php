<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\dptdt;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\employees;

class DepartmentsController extends Controller
{
    function show(){
            $departments = department::all();
            return view('departmentslist',['department'=>$departments]);
        // return view('list');
        
    }
    function create(){
        $employees = employees::whereBelongsTo(department)->get();
        $departments = department::all();
        return view('employeesbydepartment',['department'=>$departments]);
    }
}
