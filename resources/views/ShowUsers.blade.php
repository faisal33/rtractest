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
    				
    			
					<td></td>
					<td></td>
				

				</tr>
			 @endforeach

		</table>
       
        

				</div>
			</div>
		</div>
	</div>
</div>


@endsection

