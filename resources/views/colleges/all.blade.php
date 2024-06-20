@section('content')
<h2>All Colleges</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Short Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colleges as $college)
        <tr>
            <td>{{ $college->collid }}</td>
            <td>{{ $college->collfullname }}</td>
            <td>{{ $college->collshortname }}</td>
            <td><a href="{{ url('/show/college/'.$college->collid) }}">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection