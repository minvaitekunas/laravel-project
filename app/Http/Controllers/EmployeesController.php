<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees.index', ['employees' => Employees::orderBy('id')->get()]);
    }

    /**
     * Show the form for creating a new resource.
         * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $projects = \App\Models\Project::orderBy('title')->get();
        return view('employees.edit', ['employee' => $employee, 'projects' => $projects]);

    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request){
      
        $employees = new Employees();
        $employees->fill($request->all());
        $employees->save();
        return redirect()->route('employees.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employee){
        $projects = \App\Models\Project::orderBy('title')->get();
        return view('employees.edit', ['employee' => $employee, 'projects' => $projects]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees){
        $employees->fill($request->all());
        $employees->save();
        return redirect()->route('employees.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        $employees->delete();
        return redirect()->route('employees.index');
    }
}
