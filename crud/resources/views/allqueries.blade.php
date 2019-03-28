@extends('layouts')
@section('query_content')@if(\Session::has('failed'))
		<div class="alert alert-danger alert-dismissible fade show">
	    	{{\Session::get('failed')}}
	    </div>
	@endif
<div style="padding-top: 50px; font-size: 13px; padding-right: 20px; padding-left: 20px;">
	<form action="{{url('filter')}}" method="post">
		<fieldset class="scheduler-border">
	    	<legend class="scheduler-border">Query Filter</legend>
			<div class="form-group row">
				<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="name" name="name" placeholder="Name" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="query_id" name="query_id" placeholder="Query Id" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="phone" name="phone" placeholder="Phone No" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="city_name" name="city_name" placeholder="City Name" />
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="city_sub_group" name="city_sub_group">
				        <option>Select City</option>
				        @foreach ($getCitySubGroup as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="from_loan_amt" name="from_loan_amt" placeholder="From Loan Amt" />
	        	</div>
	        </div>
	        <div class="form-group row">
				<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="to_loan_amt" name="to_loan_amt" placeholder="To Loan Amount" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="net_incm_from" name="net_incm_from" placeholder="Net Incm From" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="net_incm_to" name="net_incm_to" placeholder="Net Incm To" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="date_from" name="date_from" placeholder="Date From" />
	        	</div>
	        	<div class="col-md-2">
	        		<input class="form-control" type="text" class="form-control" type="text" id="date_to" name="date_to" placeholder="Date To" />
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="annual_turnover" name="annual_turnover">
				        <option>Annl. Turnover</option>
				        @foreach ($getAnnualTurnOver as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        </div>
	        <div class="form-group row">
	        	<div class="col-md-2">
	        		<select class="form-control" id="query_status" name="query_status">
				        <option>Query Status</option>
				        @foreach ($getQueryStatus as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="loan_type" name="loan_type">
				        <option>Loan Type</option>
				        @foreach ($getLoanType as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="user_assign" name="user_assign">
				        <option>User Assign</option>
				        @foreach ($getUserAssign as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="tool_type" name="tool_type">
				        <option>Tool Type</option>
				        @foreach ($getToolType as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="auto_case" name="auto_case">
				        <option>Auto Case</option>
				        <option value="1">Yes</option>
				        <option value="0">No</option>
				    </select>
	        	</div>
	        	<div class="col-md-2">
	        		<select class="form-control" id="campaign_source" name="campaign_source">
				        <option>Campaign Src</option>
				        @foreach ($getCampaignSource as $key => $value)
				        	<option value="{{ $key }}">{{ $value }}</option>
				        @endforeach
				    </select>
	        	</div>
	        </div>
	        <div class="form-group row" style="margin-bottom: 0rem !important;">
	        	<div class="col-md-2 buttons-group">
	        		<input type="hidden" class="form-control" id="_token" value="{{csrf_token()}}" name="_token">
	        		<button type="submit" class="btn btn-warning" value="Filter" name="filter">Filter</button>
	        		<button type="submit" class="btn btn-warning" value="Clear" name="filter">Clear</button>
	        	</div>
	        </div>
		</fieldset>
	</form>
</div>

<div style="padding-top: 50px; padding-right: 20px; padding-left: 20px; font-size: 13px;" class="table-responsive">
	<!-- <div class="jumbotron"> -->
		<table class="table table-striped table-bordered">
		    <thead>
			    <tr class="" style="background-color: #448aff; color: #fff">
				    <th><input type="checkbox" value="" name=""></th>
			        <th>Query</th>
			        <th>Tool</th>
			        <th>Loan</th>
			        <th>Name</th>
			        <th>Mobile</th>
			        <th>Income</th>
			        <th>Status</th>
			        <th>Follow up</th>
			        <th>Assign To</th>
			        <th>Action</th>
			        <th>Query Status Update</th>
			    </tr>
			</thead>
			<tbody>
				@foreach ($queriesData as $key => $value)
			    <tr>
			    	<td><input type="checkbox" value="{{ $value['query_id'] }}" name="query_id[]"></td>
			    	<td><b>{{ $value['query_id'] }}</b><br>{{ $value['query_datetime'] }}</td>
			    	<td>{{ $value['tool_type'] }}<br>{{ $value['form_type'] }}<br><b>{{ ($value['auto'] == 'yes') ? 'Auto' : '' }}</b></td>
			    	<td><b>{{ $value['loan_amt'] }}</b><br>{{ $value['loan_type'] }}</td>
			    	<td><b>{{ $value['name'] }}</b><br>{{ $value['city'] }}</td>
			    	<td><b>{{ $value['mobile'] }}</b><br>{{ $value['email'] }}</td>
			    	<td><b>{{ $value['income'] }}</b><br>{{ $value['occupation'] }}</td>
			    	<td>{{ $value['query_st_description'] }}</td>
			    	<td><b>{{ $value['follow_up'] }}</b></td>
			    	<td>{{ $value['assign_to'] }}<br><b>({{ $value['total_queries'] }})</b></td>
			    	<td>Email<br>SMS</td>
			    	<td>Query Status</td>
			    </tr>
			    @endforeach
			</tbody>
		</table>
	<!-- </div> -->
</div>
@stop