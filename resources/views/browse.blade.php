@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" > This is the profile of {{$curruser->name}}
				</div>
				
				<div class="panel-body">
					
				        <div>
							<label class="first" >Email : </label>
					        <label class="second">{{ $curruser->email }} </label>
				    	</div>
				    	
				<br>
						<div >
				    		<label class="first" >D.O.B : </label>
							<label class="second">{{ $curruser->dob}}</label>
						</div>
				<br>

						<div >
				    		<label class="first" >Phone # : </label>
							<label class="second">{{ $curruser->phone}}</label>
						</div>
				<br>
						<div >
				    		<label class="first" >Address : </label>
							<label class="second">{{ $curruser->address }} </label>
						</div>
				<br>
						<div >
				    		<label class="first" >City : </label>
						    <label class="second">{{ $curruser->city }} </label>
						</div>
				<br>
						<div >
				    		<label class="first" >Country : </label>
							<label class="second">{{ $curruser->country }} </label>
						</div>
				<br>
						<div class="col-md-8 col-md-offset-3">									
							<a class="btn btn-small btn-info" 
							href="{{ URL::to('profile/show') }}">
							Show all Users</a>
						</div>

					


				</div>
			</div>
		</div>
	</div>
</div>

@endsection
