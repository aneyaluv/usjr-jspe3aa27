@section('content')
<h2>All Departments</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Short Name</th>
            <th>College</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->deptid }}</td>
            <td>{{ $department->deptfullname }}</td>
            <td>{{ $department->deptshortname }}</td>
            <td>{{ $department->college->collfullname }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection