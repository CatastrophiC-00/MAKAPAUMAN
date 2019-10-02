@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjects/{{ $subject->id }}/sections">
			@csrf
		  <div class="form-group">
		    <label for="section">Section Name</label>
		    <input type="text" class="form-control" name='name'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection