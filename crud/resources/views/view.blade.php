@extends('layouts')
@section('content')
	@if(\Session::has('success'))
		<div class="alert alert-success alert-dismissible fade show">
	    	{{\Session::get('success')}}
	    </div>
	@endif
	@if ( count( $errors ) > 0 )
		<div class="alert alert-danger alert-dismissible fade show">
	    @foreach ($errors->all() as $error)
	        {{ $error }}
	    @endforeach
	    </div>
	@endif
	<div class="container" style="padding-top: 50px">
		<div class="jumbotron">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Username</th>
			        <th>Email</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			      @foreach ($viewData as $key => $value)
			      <tr>
			        <td>{{ $value['username'] }}</td>
			        <td>{{ $value['email'] }}</td>
			        <td><a href="/delete/{{$value->id}}" style="text-decoration: none; color: black;"><i class="fa fa-edit" style="font-size:24px"></i></a> <a href="#" style="text-decoration: none; color: black;"><i class="material-icons" style="font-size:24px">delete_forever</i></td></a>
			      </tr>
			      @endforeach
			    </tbody>
			  </table>
	        	
		</div>
	</div>
@stop