<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Illuminate\Http\Request;
use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(){
        $student = Student::latest('id')->get();
        $data['$student'] =$student;
        return view('students', compact('student'));
    }


  public function export(){
 return Excel ::download( new StudentsExport , 'students.xlsx');

  }

}
