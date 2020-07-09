@extends('../layouts.app')
@section('page-title', 'Students\' details')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card bg-primary text-white " style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Student's photo">
                        <div class="card-body">
                              <h5 class="card-title">Registration number: {{$student->registration_number}} </h5>
                        </div>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item bg-primary "> {{$student->name}} {{$student->surname}}</li>
                            <li class="list-group-item bg-primary">ID: {{$student->id}}</li>
                            <li class="list-group-item bg-primary">Email: {{$student->email}}</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
