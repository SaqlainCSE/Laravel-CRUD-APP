<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dpt=Department::orderBy('id','desc')->get();
        return view('admin.department.view', compact('dpt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dpt=Department::orderBy('id','desc')->get();

        return view('admin.department.create', compact('dpt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date=$request->all();
        Department::create($date);
        return back()->with('success', 'Data Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Department::find($id);
        return view('admin.department.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data=Department::find($id);
         $new_data=$request->all();
         $data->update($new_data);

         return redirect('/departments')->with('success', 'Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Department::find($id);
        $data->delete();
        return back()->with('success', 'Data Deleted Successfully');
    }

    //This is search controller
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);

        $request_txt = $request->search;
        $dpt=Department::orderBy('id','desc')
                        ->where('dpt_name','like','%'.$request_txt.'%')
                        ->orWhere('dpt_code','like','%'.$request_txt.'%')
                        ->get();

        return view('admin.department.view', compact('dpt'));

    }
}
