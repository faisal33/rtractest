@extends('app')

@section('content')


</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" >Showing all the Registered Users
				</div>
				    

	<div class="panel-body">

		<table class="helo">
				<tr ></tr>

				<tr> <th>Name</th><th>Email</th><th>Country &nbsp;</th><th></th><th></th><th></th><th></th><th>
				     </th><th></th>
			   </tr>
  
  			  @foreach ($allprofiles as $user)
				<tr >	
    				
    				<td>{{ $user->name }}</td> <td>{{$user->email}}</td> <td>{{$user->country}} &nbsp;</td>
    				
    				<td>

				       <a class="btn btn-small btn-info" style="background-color:green" 
				       href="{{URL::to('profile/browse', array($user->email))}}"> Browse </a>
					<td>

					</td>

					@if($user->name == Auth::user()->name)
				   <td>
						<a class="btn btn-small btn-info" style="background-color:orange" 
						   href="{{ URL::to('profile/' . Auth::user()->email . '/edit') }}">Edit </a>

				   </td>

					<td>
				
					{!! Form::open(array('route' => array('profile.destroy', $user->email), 'method' => 'delete')) !!}
       
       					 <button type="submit" class="btn btn-primary" style="background-color:red" >Delete</button>
   					 {!! Form::close() !!}

					</td>
							  
					@else
					<td></td>
					<td></td>
					@endif

				</tr>
			 @endforeach

		</table>
       
        

				</div>
			</div>
		</div>
	</div>
</div>


@endsection

