<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpManagementController;

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

Route::get('/',[EmpManagementController::class,'index']);
Route::get('/emp/insert',[EmpManagementController::class,'create']);
Route::post('/emp/store',[EmpManagementController::class,'store']);
Route::get('/emp/edit/{id}',[EmpManagementController::class,'edit']);
Route::post('/emp/update/{id}',[EmpManagementController::class,'update']);
Route::get('/emp/destroy/{id}',[EmpManagementController::class,'destroy']);