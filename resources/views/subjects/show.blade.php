@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Section Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subject->sections as $section)
					<tr>
						<td>{{ $section->id }}</td>
						<td>{{ $section->name }}</td>
						<td>
							<a href="/subjects/section/{{ $section->id }}/edit">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/{{ $subject->id }}/sections'>Add a new Section</a>
	</div>
@endsection