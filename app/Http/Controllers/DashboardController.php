<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDepartments = Department::count();
        $totalEmployees = Employee::count();

        $departmentStats = Department::withCount('employees')
            ->orderByDesc('employees_count')
            ->get();

        return view('dashboard', compact(
            'totalDepartments',
            'totalEmployees',
            'departmentStats'
        ));
    }
}