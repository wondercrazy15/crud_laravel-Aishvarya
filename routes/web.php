<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpinsertController;
use App\Http\Controllers\EmployeeContrller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('employees','App\Http\Contrllers\EmployeeContrller');
 Route::view('insert','emp_create');
 //display
 Route::get('display',[EmployeeContrller::class,'disp_employee']); 
//Route::view('display','display'); 
Route::post('insert', [EmpinsertController::class,'insertform']);
Route::post('create', [EmpinsertController::class,'insert']);
Route::get('edit/{id}',[EmployeeContrller::class,'edit_employee']);
Route::post('edit',[EmployeeContrller::class,'update_employee']);
Route::get('delete/{id}',[EmployeeContrller::class,'delete_employee']);