@extends('layouts.default')

@section('content')
	<h1>{{$author->name}}</h1>

	<p>{{$author->bio}}</p>
	<p> {{ link_to_route('authors','Authors') }}</p>
	<p> {{ link_to_route('edit_author','Edit', array($author->id)) }}</p>


@stop