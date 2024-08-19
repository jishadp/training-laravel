<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController
{
    public function list()
    {
        $students = Student::all();  // select * from students
        return view('list',compact('students'));
    }

    public function new(){
        return view('new');
    }

    public function save(Request $request){
        // $name = $_POST['name'];
        // $name = request('name');
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;

        // INSRT INTO

        return redirect()->route('student.index');
    }

    public function delete(){
        return view('new');
    }
}
