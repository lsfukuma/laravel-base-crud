@extends('layouts.app')
@section('page-title', 'Modify student details')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('students.edit')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-2" id="name" name="name"  placeholder="Enter first name">
                    <label for="exampleInputEmail1">Lastname</label>
                    <input type="text" class="form-control mb-2" id="surname" name="surname"  placeholder="Enter last name">
                    <label for="exampleInputEmail1">Registration number</label>
                    <input type="text" class="form-control mb-2" id="registration_number" name="registration_number"  placeholder="Enter registration number">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control mb-2" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>

                  <button type="submit" class="btn btn-info">Update</button>
                </form>
                      <a class="btn btn-danger btn-sm"href="{{route('students.update', [$student->id])}}">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
