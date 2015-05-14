@extends('layouts.default')


@section('content')
	<h1>Add New Auth</h1>


	{{  Form::open(array('url' => 'authors/create')) }}

	<p>
		{{ Form::label('name','Auth Name:') }}<br>
		{{ Form::text('name') }}<br>
	</p>

	<p>
		{{ Form::label('bio','Bio:') }}<br>
		{{ Form::textarea('bio') }}<br>
	</p>

	<p>
		{{ Form::submit('Add')}}

	</p>

	{{ Form::close() }}

@stop