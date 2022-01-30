<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=student::latest()->paginate(5);
        return view('students.index',compact('students'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(request $request)
    {
        $request->validate([
        'nama'=>'required',
        'kursus'=>'required',
        'biaya'=>'required',
    ]);

        student::create($request->all());

        return redirect()->route('students.index')
        ->with('success','students created successfully.');
    }

    public function show(student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit(student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(request $request, student $student)
    {
        $request->validate([
    ]);
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','students update successfully');
    }

    public function destroy(student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
        ->with('success','student delete successfully');
    }
}
