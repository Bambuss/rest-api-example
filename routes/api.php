<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('company', CompanyController::class)->except('create', 'edit');
Route::resource('employee', EmployeeController::class)->except('create', 'edit');
