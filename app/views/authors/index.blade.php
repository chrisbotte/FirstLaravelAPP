@extends('layouts.default')

@section('content')

	<h1>Authors Page</h1>



<ul>
	@foreach($authors as $author)
		<li>{{ link_to_route('author',$author->name, array($author->id)) }}</li>

	@endforeach
</ul>

<p>  {{ link_to_route('new_author','New Auth') }} </p>

@stop








	

