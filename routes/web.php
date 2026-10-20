<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/departments', [DepartmentController::class, 'index'])
    ->middleware('auth')
    ->name('departments.index');

Route::get('/departments/create', [DepartmentController::class, 'create'])
    ->middleware('auth')
    ->name('departments.create');

Route::post('/departments', [DepartmentController::class, 'store'])
    ->middleware('auth')
    ->name('departments.store');

Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])
    ->middleware('auth')
    ->name('departments.edit');

Route::put('/departments/{department}', [DepartmentController::class, 'update'])
    ->middleware('auth')
    ->name('departments.update');

Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])
    ->middleware('auth')
    ->name('departments.destroy');

Route::get('/employees', [EmployeeController::class, 'index'])
    ->middleware('auth')
    ->name('employees.index');

Route::get('/employees/create', [EmployeeController::class, 'create'])
    ->middleware('auth')
    ->name('employees.create');

Route::post('/employees', [EmployeeController::class, 'store'])
    ->middleware('auth')
    ->name('employees.store');

Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
    ->middleware('auth')
    ->name('employees.edit');

Route::put('/employees/{employee}', [EmployeeController::class, 'update'])
    ->middleware('auth')
    ->name('employees.update');

Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
    ->middleware('auth')
    ->name('employees.destroy');

Route::get('/', function () {
    return redirect()->route('login');
});