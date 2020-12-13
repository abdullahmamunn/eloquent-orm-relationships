<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Student;
use App\Department;

class StudentController extends Controller
{
      public function index()
      {
//      	  $student = Student::with('course')->get();
//      	  $student = Student::has('course')->get();

//      	  $student = Student::whereHas('course',function ($query){
//      	      $query->where('crs_name', 'like', '%CSE%');
//          })->with('course')->get();
//          $student = Student::doesntHave('course')->get();
//          $student = Student::has('course','>=',2)->with('course')->get();
          $student = Student::all();
      	  return view('student.index',compact('student'));
      }

    public function create()
    {
         $courses = Course::all();
          return view('student.student-form',compact('courses'));
    }

    public function store(Request $request)
    {
        $course = $request->crs_name;
//        unset($request['courses']);
        unset($request['crs_name']);
        $student = Student::create($request->all());
        $student->courses()->attach($course);
        return redirect('student');
    }
}
