<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\employee;

class EmpinsertController extends Controller
{
    public function insertform(){
        return view('emp_create');
    }
    public function insert(Request $request){
        
        $emp_name = $request->input('emp_name');
        $dept_name = $request->input('dept_name');
        $salary = $request->input('salary');
        
        $data=array('emp_name'=>$emp_name,"dept_name"=>$dept_name,"salary"=>$salary);
        DB::table('employees')->insert($data);
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/display">Click Here</a> to go back.';
        // return view('display');
        return redirect('display');
    }
    public function displaydata(){
        return view('display');
    }
}
