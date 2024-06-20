@section('content')
<h2>College Details</h2>
<p><strong>ID:</strong> {{ $college->collid }}</p>
<p><strong>Full Name:</strong> {{ $college->collfullname }}</p>
<p><strong>Short Name:</strong> {{ $college->collshortname }}</p>

<h3>Departments</h3>
<ul>
    @foreach ($college->departments as $department)
    <li>{{ $department->deptfullname }}</li>
    @endforeach
</ul>

<h3>Programs</h3>
<ul>
    @foreach ($college->programs as $program)
    <li>{{ $program->progfullname }}</li>
    @endforeach
</ul>

<p><a href="{{ url('/show/colleges') }}">Back to All Colleges</a></p>
@endsection