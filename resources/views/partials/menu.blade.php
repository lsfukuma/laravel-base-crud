<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand" href="#">CRUD Exercise</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('students.index')}}">Students list</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('students.create')}}">Add new student</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
    </ul>
  </div>
</nav>
