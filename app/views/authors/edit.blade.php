@extends('layouts.default')


@section('content')

<h1>Editing {{ $author->name }} </h1>


{{ Form::open(array('url'=>'author/update', 'PUT')) }}
	
	<p>
		{{ Form::label('name','Auth Name:') }}<br>
		{{ Form::text('name', $author->name) }}<br>
	</p>

	<p>
		{{ Form::label('bio','Bio:') }}<br>
		{{ Form::textarea('bio', $author->bio) }}<br>
	</p>

	<p>
		{{ Form::hidden('id', $author->id) }}
	</p>

	<p>
		{{ Form::submit('Edit')}}

	</p>

	{{ Form::close() }}

@stop