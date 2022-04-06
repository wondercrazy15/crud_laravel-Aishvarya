<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeContrller extends Controller
{
    public function disp_employee(){

        $data = employee::all();
         return view('display',['emps'=>$data]);
    }
    public function edit_employee($id){
        $data= employee::find($id);
        return view('edit',['empdata'=>$data]);
    }
    public function update_employee(Request $req){
       $data = employee::find($req->id);
       $data->emp_name=$req->emp_name;
       $data->dept_name=$req->dept_name;
       $data->salary=$req->salary;
       $data->save();
       return redirect('display');
    }
    public function delete_employee($id){
        $data =employee::find($id);
        $data->delete();
        return redirect('display');
    }
}
