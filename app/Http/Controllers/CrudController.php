<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class CrudController extends Controller
{
    public function showdata(){
        // $showdata= Crud::all();
        $showdata= Crud::paginate(5);
        return view('showdata',compact('showdata'));
    }
    public function adddata(){
        return view('adddata');
    }
    public function storedata(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
        ]);
        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        return redirect('/')->with('message',"Data Inserted Successfully");
    }
    public function editdata($id){
        $editdata= Crud::find($id);
        return view('editdata',compact('editdata'));
    }
    public function updatedata(Request $request,$id){
        $validated = $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
        ]);
        $crud =Crud::find($id=null);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        return redirect('/')->with('message',"Data Updated Successfully");
    }
    public function deletedata($id=null){
        $deletedata = Crud::find($id);
        $deletedata-> delete();
        return redirect('/')->with('message',"Data Delete Successfully");
    }
}
