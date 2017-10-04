@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h2>Cette page est non autoriser</h2>
			<a href="{{ url('cvs') }}">Retour</a>
		</div>
	</div>
</div>

@endsection