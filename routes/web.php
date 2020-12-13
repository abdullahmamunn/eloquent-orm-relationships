<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('student','StudentController@index');
Route::get('student-add','StudentController@create')->name('student.create');
Route::post('students','StudentController@store')->name('student.submit');
Route::get('dept','DepartmentController@index');
Route::get('add-course','CourseController@index');
