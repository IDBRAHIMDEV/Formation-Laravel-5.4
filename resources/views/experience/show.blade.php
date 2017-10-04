@extends('layouts.app')


@section('content')

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">

    		  <h1 class="page-header">{{ $cv->titre }}</h1>
    			
    			<table class="table">
    				<thead>
    					<tr>
    						<th>titre</th>
    						<th>Debut</th>
    						<th>Fin</th>
    					</tr>
    				</thead>
    				<tbody>

    				  @foreach($cv->experiences as $experience)
    					<tr>
    						<td><a href="{{ url('cvs/'.$cv->id) }}">{{ $experience->titre }}</a> </td>
    						<td>{{ $experience->debut }}</td>
    						<td>{{ $experience->fin }}</td>
    					</tr>

    				   @endforeach
    				</tbody>
    			</table>

    		</div>
    	</div>
    </div>

@endsection