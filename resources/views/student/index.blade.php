@extends('layouts.app')
@section('content')
<div class="container">

	<div class="card">
        <div class="card-header">
            <h1 class="text-center">Many to many relationship</h1>
            <a class="btn btn-primary float-right" href="{{route('student.create')}}">Add new</a>
        </div>
        <div class="card-body">
	    <table class="table table-borderless ">
	    <thead>
          <tr>
              <th>SL</th>
          	  <th>Name</th>
              <th>Student ID</th>
          	  <th>Courses</th>
          	  <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($student as $student_info)
          <tr>
            <td>{{$loop->index+1}}</td>
          	<td>{{$student_info->name}}</td>
          	<td>{{$student_info->s_id}}</td>
          	<td>
                @foreach($student_info->courses as $crs_name)
                <span>
                    {{$crs_name->crs_name}}
                    @if(!$loop->last)
                        ,
                    @endif
                </span>
                @endforeach
            </td>
              <td>
                  <a href="" class="btn btn-info">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
        @endforeach

        </tbody>
         </table>
        </div>
{{--        <h6>Course name</h6>--}}
{{--    @foreach($student as $student_info)--}}
{{--            <h4>{{$student_info->crs_name}}</h4>--}}
{{--        @endforeach--}}
{{--        <h2>Student Name:{{$student_info->student->name}}</h2>--}}

    </div>
</div>
@endsection
