@extends('layout')

@section('title','Home')

@section('content')
	<h1>My First Website</h1>

	<ul>
		<!--
		<?php foreach ($tasks as $task) : ?>
			<li><?= $task; ?></li>
		<?php endforeach; ?>
		-->

		@foreach ($tasks as $task)
			<li>{{ $task }}</li>
		@endforeach
	</ul>
@endsection
