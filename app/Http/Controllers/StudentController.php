<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::with('grade')->latest()->get();
        return view('students', [
            'title' => "Students",
            'students' => Student::all()
            // 'students' => $students

        ]);
    }
}
