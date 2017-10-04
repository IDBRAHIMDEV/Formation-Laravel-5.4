@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			
			<h1 class="page-header">Nouvelle expérience</h1>
          <form method="post">
             
             {{ csrf_field() }}

			<div class="form-group">
			 <label for="titre">Titre</label>
			 <input type="text" name="titre" class="form-control">
			</div>

			<div class="form-group">
			 <label for="datedebut">Date debut</label>
			 <input type="text" name="datedebut" class="form-control">
			</div>

			<div class="form-group">
			 <label for="datefin">Date fin</label>
			 <input type="text" name="datefin" class="form-control">
			</div>

			<div class="form-group">			 
			 <button type="submit" class="  btn btn-primary form-control">Ajouter</button>
			</div>

          </form>
          

		</div>
	</div>
</div>

@endsection