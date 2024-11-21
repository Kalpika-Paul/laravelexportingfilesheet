<?php

namespace App\Exports;
use App\Invoice;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentsExport implements FromView
{
    public function view(): View
    {
        $students = Student::latest('id')->get();
        return view('student-export', [
            'students' => $students
        ]);
    }
}
