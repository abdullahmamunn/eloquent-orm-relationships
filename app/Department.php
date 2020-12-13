<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    Protected $fillable = [
         'student_id','d_name'
    ];
public function student()
{
	return $this->belongsTo(Student::class);
}

}
