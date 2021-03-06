@extends('../layouts.app')
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
                              <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($students as $student)
                            <tr>
                                  <th scope="row">{{$student->id}}</th>
                                  <td>{{$student->name}}</td>
                                  <td>{{$student->surname}}</td>
                                  <td>{{$student->registration_number}}</td>
                                  <td>{{$student->email}}</td>
                                  <td> <a class="btn btn-outline-info btn-sm mr-2" href="{{route('students.show', $student['id'])}}">Details</a>
                                      <a class="btn btn-outline-warning btn-sm " href="{{route('students.edit', $student['id'])}}">Modify</a>
                                      <form class="btn" action="{{route('students.destroy', $student['id'])}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-outline-danger btn-sm d-inline-block" name="button">Delete</button>

                                      </form>

                                  </td>
                            </tr>
                        @empty
                            <div class="">
                                Your database is empty
                            </div>
                        @endforelse ($students as $student)


                    </tbody>
                </table>
            </div>
    </div>
    </div>
@endsection
