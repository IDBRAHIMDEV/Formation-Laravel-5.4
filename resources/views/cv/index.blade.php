@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
            
           

			<h1>La liste de mes cv</h1>

          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                <a href="{{ url('cvs/create') }}" class="btn btn-success">Nouveau cv</a>
              </div>
            </div>
          </div>
            
             
      <div class="row">
      @foreach($cvs as $cv)
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('storage/'.$cv->photo) }}" alt="...">
          <div class="caption">
            <h3>{{ $cv->titre }}</h3>
            <p>...</p>
            <p> 
               <form action="{{ url('cvs', ['id' => $cv->id]) }}" method="post">
                 {{ method_field('DELETE') }}

                 {{ csrf_field() }}

               
                <a href="{{ url('cvs/'.$cv->id) }}" class="btn btn-primary" role="button">Show</a> 
                

                @can('update', $cv)
                <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning" role="button">Editer</a>
                @endcan
                

                @can('delete', $cv)
                <button type="submit" class="btn btn-danger" role="button">Supprimer</button>
                @endcan
                
               </form>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

		</div>
	</div>
</div>

@endsection