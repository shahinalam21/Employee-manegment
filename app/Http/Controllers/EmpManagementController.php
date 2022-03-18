<?php

namespace App\Http\Controllers;

use App\Models\Emp_management;
use Illuminate\Http\Request;

class EmpManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Emp_management::latest()->paginate(10);
        return view('emp.home',compact('emps'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emp.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'      => 'required',
            'post'      => 'required',
            'selory'      => 'required',
            'image'      => 'required',
        ]);

        $image = $request->file('image');
        $imagename = time().'.'.$image->extension();
        $image->move(public_path('images'),$imagename);

        $emp = new Emp_management();

        $emp->name = $request->get('name');
        $emp->email = $request->get('email');
        $emp->post = $request->get('post');
        $emp->selory = $request->get('selory');
        $emp->image = $imagename;
        $emp->save();

        session()->flash('massage','Employe data inserted successfully');
        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emp_management  $emp_management
     * @return \Illuminate\Http\Response
     */
    public function show(Emp_management $emp_management)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emp_management  $emp_management
     * @return \Illuminate\Http\Response
     */
    public function edit(Emp_management $emp_management ,$id)
    {
        $emps = Emp_management::find($id);
        return view('emp.edit',compact('emps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emp_management  $emp_management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emp_management $emp_management, $id)
    {
        $request->validate([
            'name'      => 'required',
            'email'      => 'required',
            'post'      => 'required',
            'selory'      => 'required',
            'image'      => 'required',
        ]);

        $image = $request->file('image');
        $imagename = time().'.'.$image->extension();
        $image->move(public_path('images'),$imagename);

        $emp = new Emp_management();

        $emp->name = $request->get('name');
        $emp->email = $request->get('email');
        $emp->post = $request->get('post');
        $emp->selory = $request->get('selory');
        $emp->image = $imagename;
        $emp->save();

        session()->flash('massage','Employe data updated successfully');
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emp_management  $emp_management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emp_management $emp_management, $id)
    {
        $emps = Emp_management::destroy($id);
        
        session()->flash('massage','Employe data deleted successfully');
        return redirect('/');
    }
}
