<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class HomeController extends Controller
{
    public function aboutUs($n, $e){
        return view('about',['name'=>$n, 'email'=>$e]);
    }
    public function add(){
        return view('add');
    }
    public function all(){
        $data = Employee::all();
        return view('list',['employee'=>$data]);
    }
    public function store(Request $request){
      //  dd($request);
      $obj = new Employee();
      $obj->name = $request->name;
      $obj->email = $request->email;
      $obj->birth_date = $request->birth_date;
      $obj->salary = $request->salary;
      //$obj->status ->nullable();
      if($obj->save()){
         return redirect()->to('/list');
      }


    }
    public function edit($id){
        $data = Employee::find($id);
      
        return view('edit',['employee'=>$data]);
    }
    public function updateStore(Request $request, $id){
        //  dd($request);
        $obj = Employee::find($id);
        
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        //$obj->status ->nullable();
        //dd($obj);
        if($obj->save()){
           return redirect()->to('/list');
        }
      }
      public function delete($id){
        $obj = Employee::find($id);
         if($obj->delete()){
            return redirect()->to('/list');
         }
      
        
    }
   
    

}
