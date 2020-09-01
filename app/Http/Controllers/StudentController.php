<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function create(){

        $student = new Student;

        $student->name = \request()->name;
        $student->email = \request()->email;
        $student->phone = \request()->phone;
        $student->save();

        return 'Success';
    }

    public function show(){

        $students = Student::paginate(2);

        return response()->json($students);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id){

        $student = Student::find($id);

        return response()->json($student);
    }

    public function update(){

        $student = Student::find(request()->id);

        $student->name = request()->name;
        $student->email = request()->email;
        $student->phone = request()->phone;
        $student->update();

        return 'Success';
    }

    public function delete($id){

        $student = Student::find($id);

        $student->delete();
    }
}
