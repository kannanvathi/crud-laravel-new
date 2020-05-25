<?php

namespace App\Http\Controllers;

use App\crud_table;
use Illuminate\Http\Request;
use Session;

class crudController extends Controller
{
    function create(Request $req){
        $crud_table = new crud_table();
        $crud_table->name = $req->input('name');
        $crud_table->email = $req->input('email');
        $crud_table->address = $req->input('address');
        $crud_table->save();
        $status = $req->session()->flash('status', 'data was saved');
        return redirect('/');
    }
    function list(){
        $data = crud_table::all();
        return view('home', ['data' => $data]);
    }
    function getData($id){
        $editData =  crud_table::find($id);
        return view('update', ['editData' => $editData]);
    }
    function updated(Request $req, $id){
        $updateData = crud_table::find($id);
        $updateData->name = $req->name;
        $updateData->email = $req->email;
        $updateData->address = $req->address;
        $updateData->save();
        $req->session()->flash('update', 'updated successfully');
        return redirect('');
    }
    function delete($id){
        crud_table::find($id)->delete();
       Session::flash('delete', 'profile was deleted');
        return redirect('');
    }
}
