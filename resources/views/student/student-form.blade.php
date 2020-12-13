@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
        <div class="card-header">
            <h1 class="text-center">Add new Student</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <form action="{{route('student.submit')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-2 col-form-label">Name</label>
                            <div class="col-10">
                                <input type="text" name="name" class="form-control" id="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-2 col-form-label">Student ID</label>
                            <div class="col-10">
                                <input type="text" name="s_id" class="form-control" id="" placeholder="Student ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">Course</div>
                            <div class="col-10">
                                <select class="form-control" name="crs_name[]" id="categories" multiple>
                                @foreach($courses as $course)
                                         <option value="{{$course->id}}">{{$course->crs_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
