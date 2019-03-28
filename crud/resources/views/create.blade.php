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
		  <center><h2>Create User</h2></center>
		  <form action="{{url('add')}}" method="post">
		  	<div class="form-group">
		      <label for="username">Username:</label>
		      <input type="username" class="form-control" id="username" placeholder="Enter Name" name="username">
		    </div>
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		    </div>
		    <input type="hidden" class="form-control" id="_token" value="{{csrf_token()}}" name="_token">
		    <div class="form-group form-check">
		      <label class="form-check-label">
		        <input class="form-check-input" type="checkbox" name="remember"> I am allowing MyLoanCare to access my details provided above.
		      </label>
		    </div>
		    <button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		</div>
	</div>
@stop