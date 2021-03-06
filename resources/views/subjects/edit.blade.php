@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjects/{{ $subject->id }}/update">
		@csrf
		  <div class="form-group">
		    <label for="title">Subject Name</label>
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" value='{{ $subject->name }}'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection