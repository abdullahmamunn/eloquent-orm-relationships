<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::create([
            'crs_name'=>"CSE 101"
        ]);
        $course = Course::create([
            'crs_name'=>"MAT 101"
        ]);
        $course = Course::create([
            'crs_name'=>"CSE 100"
        ]);
        $course = Course::create([
            'crs_name'=>"ENG"
        ]);
        $course = Course::create([
            'crs_name'=>"CSE 101"
        ]);
        $course = Course::create([
            'crs_name'=>"MAT 101"
        ]);
        $course = Course::create([
            'crs_name'=>"CSE 102"
        ]);
        $course = Course::create([
            'crs_name'=>"ENG"
        ]);
        return response()->json(['message'=>'data inserted']);
    }
}
