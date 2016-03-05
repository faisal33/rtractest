@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" >Welcome to the Website. Here you can view your profile and 
					                        profiles of everyone that is registered with us !!!
				</div>
				
				<div class="panel-body">
					
				    <div>
							<label class="first" >Welcome to our website </label>
							<label class="second" >{{Auth::user()->name}} </label> 
							<label class="first" >from </label>
							<label class="second" >{{Auth::user()->city}}, {{Auth::user()->country}}</label>
					</div>

					<div>
					  		<label class="first" > We currently have </label>
					  		<label class="second" >{{$counts[0]}}</label>
					  		<label class="first" > registered users on our website. There are </label>
					  		<label class="second" >{{$counts[1]}}</label>
					  		<label class="first" > users from  </label>
					  		<label class="second" >{{Auth::user()->country}}</label>
		 		    </div>

				<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
