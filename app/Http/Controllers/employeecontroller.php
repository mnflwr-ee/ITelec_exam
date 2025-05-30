<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        return view ('employee.index');
    }

    public function create()
    {
        return view ('employee.create');
    }


    public function (Request $request)
    {
    $request->validate([
       
        
    ]);

    ::create($request->all());
    
    }



    public function edit( int $id)
    {
        $employees = employee::find($id);
        return view ('employee.edit');
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
            
            ]);
        
            ::findOrFail($id)->($request->all());
            return redirect ()->back()->with('status','Employee Updated Successfully!');
            }
    }

    public function (int $id){
        $employees = employee::findOrFail($id);
        $employees->deete();
        return redirect ()->back()->with('status','Employee Deleted');
    }
}
