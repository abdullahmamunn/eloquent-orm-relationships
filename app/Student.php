<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
//
//    public function dept()
//    {
//    	return $this->hasMany('\App\Department');
//    }
//
//    public function course()
//    {
//        return $this->hasMany(Course::class);
//    }
    public function courses()
    {
//        return $this->belongsToMany(Course::class);
//        return $this->belongsToMany(Course::class);
        return $this->belongsToMany('App\Course','course_student','student_id','course_id');

    }
}
