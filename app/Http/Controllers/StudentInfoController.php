<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Student;

class StudentInfoController extends Controller
{
    public function studentEntry() {
        return view('student-entry');
    }

    public function getStudentData(Request $request) {

        $data = $request;

        // dd($request);

        // array implementation
        // return view('student-list')->with(['data'=>$data]);

        // array as parameter
        // return view('student-list', ['data'=>$data]);

        // compact implementation
        // return view('student-list', compact('data'));

        // with compact
        return view('student-list')->with(compact('data'));

        // redirect
        // return redirect()->to(url('/students/list'))->with(['data'=>$data]);
    }

    public function listData() {
        $allStudents = Student::all();

        if($allStudents === NULL) {
            return redirect()->to('/');
        } else {
            return redirect()->to(url('/students/list'))->with(['data'=>$allStudents]);
        }

    }
}
