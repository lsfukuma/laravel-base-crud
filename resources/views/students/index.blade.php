@extends('../layouts.app');
@section('page-title', 'CRUD Students index' )
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Surname</th>
                              <th scope="col">Registration number</th>
                              <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)

                        <tr>
                              <th scope="row">{{$student->id}}</th>
                              <td>{{$student->name}}</td>
                              <td>{{$student->surname}}</td>
                              <td>{{$student->registration_number}}</td>
                              <td>{{$student->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    </div>
@endsection
