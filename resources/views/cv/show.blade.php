@extends('layouts.app')


@section('content')

<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">

			<h1>@{{ message }}</h1>
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Experience</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					
					<ul class="list-group">
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nulla at laborum vero delectus dicta quo, corporis voluptas fugit nesciunt numquam quisquam saepe quis quos blanditiis minima voluptate facilis sint eum. Ratione, eum, asperiores? Eaque recusandae esse, et, culpa architecto repellendus, ab cupiditate aut provident repellat saepe ad veniam velit.</p>
							<small>12/03/2016 - 03/10/2017</small>
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nulla at laborum vero delectus dicta quo, corporis voluptas fugit nesciunt numquam quisquam saepe quis quos blanditiis minima voluptate facilis sint eum. Ratione, eum, asperiores? Eaque recusandae esse, et, culpa architecto repellendus, ab cupiditate aut provident repellat saepe ad veniam velit.</p>
							<small>12/03/2016 - 03/10/2017</small>
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nulla at laborum vero delectus dicta quo, corporis voluptas fugit nesciunt numquam quisquam saepe quis quos blanditiis minima voluptate facilis sint eum. Ratione, eum, asperiores? Eaque recusandae esse, et, culpa architecto repellendus, ab cupiditate aut provident repellat saepe ad veniam velit.</p>
							<small>12/03/2016 - 03/10/2017</small>
						</li>
					</ul>

				</div>
			</div>

			<hr>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Formation</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi natus veritatis consequatur, voluptates, expedita tempore rem illum magni ipsum repudiandae.
				</div>
			</div>

			<hr>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Portefolio</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi natus veritatis consequatur, voluptates, expedita tempore rem illum magni ipsum repudiandae.
				</div>
			</div>

			<hr>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Competence</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi natus veritatis consequatur, voluptates, expedita tempore rem illum magni ipsum repudiandae.
				</div>
			</div>
		  
		</div>
	</div>
</div>

@endsection


@section('javascripts')

<script src="js/vue.js"></script>

<script>
	
	var app = new Vue({
       el: '#app',
       data: {
       	 message: 'je suis Mohamed IDBRAHIM'
       }
	});

</script>

@endsection