<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employeeList(){
        $employeeList = Employee::where('user_id', auth()-> user()->id)
        ->orderBy('created_at','desc')
        ->limit(100)
        ->get();

        return view('employees.employers',['employeeList'=>$employeeList]);
    }
    public function create(){
        return view('employees.create');
    }
    public function store(Request $request){
        $request->validate([
            'date_of_hire' => 'string|required',
            'employee_name' => 'string|required',
            'address' => 'string|required',
            'cell_no' => 'string|required',
            'email_add' => 'string|required',
        ]);

        $employ = Employee::create([
            'user_id'=> auth()-> user()-> id,
            'date_of_hire' => $request->date_of_hire,        
            'employee_name' => $request->employee_name,
            'address' => $request->address,
            'cell_no' => $request->cell_no,
            'email_add' => $request->email_add,
        ]);
        return redirect('/employees/'. $employ->id) ->with('info', 'New Employee Added');       
    }
    public function show(Employee $employ){
        return view('employees.view', ['employ'=>$employ]);
    }
    public function edit(Employee $employ){
        return view('employees.edit', ['employ'=>$employ]);
    }
    public function update(Employee $employ, Request $request){
        $request->validate([
            'date_of_hire' => 'string|required',
            'employee_name' => 'string|required',
            'address' => 'string|required',
            'cell_no' => 'string|required',
            'email_add' => 'string|required',
        ]);
        $employ->update($request->all());

        return redirect('/employees/' . $employ->id)->with('info', 'Updated Successfully!!');
    }
    public function recentEmployee(){

        $recentEmployee = Employee::orderBy('created_at','desc')->limit(100)->get();

         return view('employees.recent', ['recentEmployee'=>$recentEmployee]);
    }
    public function open(Employee $employ){
        return view('employees.open', ['employ'=>$employ]);
    }
   public function delete($id){

        $employ = Employee::findOrFail($id);
        $employ->delete();

        return redirect('/employees/employers')->with('info', 'Deleted Successfully!!');
        
   } 
   public function list(Employee $employ){

    return view('employees.view', ['employ'=>$employ]);
    
   } 
}
