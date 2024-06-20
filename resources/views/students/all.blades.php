@section('content')
<h2>All Students</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Program</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->studid }}</td>
            <td>{{ $student->studfirstname }}</td>
            <td>{{ $student->studlastname }}</td>
            <td>{{ $student->program->progfullname }}</td>
            <td>{{ $student->studyear }}</td>
            <td><a href="{{ url('/show/student/'.$student->studid) }}">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection