<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $employees = Employee::query()->orderBy('id', 'desc');

        if ($request->has('search') && !is_null($request->search)) {
            $employees->where('first_name', 'like', "%{$request->search}%")->orWhere('last_name', 'like', "%{$request->search}%");
        }
        if (
            $request->has('ktp') && !is_null($request->ktp) 
        ) {
            $employees->where('ktp', 'like', "%{$request->ktp}%");
        }
        if ($request->has('position') && !is_null($request->position)){
            $employees->where('position', 'like', "%{$request->position}%");
        }
        $employees = $employees->get();
        return view('employee.index', [
            'employees' => $employees,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreemployeeRequest $request)
    {
        $data = $request->validated();
        employee::create($data);
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        return view('employee.show', [
            'data' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        return view('employee.edit', [
            'data' => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
