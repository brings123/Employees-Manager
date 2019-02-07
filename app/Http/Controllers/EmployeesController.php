<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
  public function store(Request $request){
      $employee = new Employee();
      $employee->nom = $request->nom;
      $employee->prenom = $request->prenom;
      $employee->numtel = $request->numTel;
      $employee->save();
      return view('succee');
  }
    public  function index(){
          $employees=Employee::all();
          return view('index',['employees'=>$employees]);
    }
    public function create(){
      return view('create');
    }
    public function delete(Request $request, $id){
      $employee= Employee::find($id);
      $employee->delete();
      return redirect('index');
    }
    public function edit($id){
      $employee=Employee::find($id);
      return view('edit',['employee'=>$employee]);
    }
    public function update(Request $request,$id){
      $employee=Employee::find($id);
      $employee->nom=$request->nom;
      $employee->prenom=$request->prenom;
      $employee->numtel=$request->numTel;
      $employee->update();
      return redirect('index');
    }
}
