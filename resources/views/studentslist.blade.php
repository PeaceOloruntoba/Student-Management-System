  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Matric No</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <th scope="row"></th>
        <td>{{ $student->mat_no }}</td>
        <td>{{ $student->firstName }}</td>
        <td>{{ $student->secondName }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->Speciality }}</td>
        <td>
          <a href="#" class="btn btn-sm btn-info">Show</a>
          <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <a href="#" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>