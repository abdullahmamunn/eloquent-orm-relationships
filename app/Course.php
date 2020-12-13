<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
//    public function student()
//    {
//        return $this->belongsTo(Student::class);
//    }
    public function students()
    {
//        return $this->belongsToMany(Student::class);
        return $this->belongsToMany('App\Student');

    }
}
