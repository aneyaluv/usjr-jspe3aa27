@section('content')
<h2>Student Details</h2>
<p><strong>ID:</strong> {{ $student->studid }}</p>
<p><strong>First Name:</strong> {{ $student->studfirstname }}</p>
<p><strong>Last Name:</strong> {{ $student->studlastname }}</p>
<p><strong>Middle Name:</strong> {{ $student->studmidname }}</p>
<p><strong>Program:</strong> {{ $student->program->progfullname }}</p>
<p><strong>Year:</strong> {{ $student->studyear }}</p>
<p><a href="{{ url('/show/students/all') }}">Back to All Students</a></p>
@endsection