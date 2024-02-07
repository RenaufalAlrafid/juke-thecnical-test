<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $employees = employee::query()->where(function (Builder $builder) use ($request) {
            $name = $request->input('name');
            if ($name) {
                $builder->where('first_name', 'like', "%$name%")
                    ->orWhere('last_name', 'like', "%$name%");
            }

            $position = $request->input('position');
            if ($position) {
                $builder->where('position', 'like', "%$position%");
            }
            $ktp = $request->input('ktp');
            if ($ktp) {
                $builder->where('ktp', 'like', "%$ktp%");
            }
        });

        return view('employee.index', [
            'employees' => $employees->get(),
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
