@extends('layout.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	<img src="/img/gal8.jpg" class="img-thumbnail" />
@endsection


@section('sidebar')
	@parent
	<p>This is append text</p>
	@endsection

