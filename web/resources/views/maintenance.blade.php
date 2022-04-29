@php
	$buttons = str_split('Graphictoria')
@endphp

@extends('layouts.app')
@nofooter

@section('title', 'Maintenance')
@section('description', 'Graphictoria is currently under maintenance, check back later!')

@section('theme', 'dark')

@section('page-specific')
<script src="{{ mix('js/pages/maintenance.js') }}"></script>
@endsection

@section('content')
<div class="gtoria-maintenance-background"></div>
<div class="text-center m-auto container gtoria-maintenance-form">
	<h1>Graphictoria is currently under maintenance.</h1>
	<h4>Our cyborg team of highly trained code-monkes are working to make Graphictoria better. We'll be back soon!</h4>
	@if(!$hideLogin)
		<div class="input-group mt-5 d-none d-md-flex" id="gt_mt_buttons">
			<input type="password" class="form-control" placeholder="Password" autoComplete="off" />
			@foreach($buttons as $index => $button)
				<button class="btn btn-secondary" type="button" name="gt_mtbtn{{ $index }}">{{ $button }}</button>
			@endforeach
		</div>
	@endif
</div>
@endsection
