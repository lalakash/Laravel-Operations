<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class Users extends Model {
	protected $table = 'users_bak';
	public $timestamps = false;

	public function addUsers($data) {
		$this->username = $data['username'];
		$this->password = md5($data['pwd']);
		$this->email = $data['email'];
		$this->token = $data['_token'];
		$this->save();
	}

	public function getUsers() {
		$role = new Role();
		$permission = new Permission();
		$role = Role::create(['name' => 'writer']);
		$permission = Permission::create(['name' => 'edit articles']);
		return $this::get();
	}

	public function getAllQueries() {
		/*
		Data Required in loop:
		Query Id / Datetime,		Tool Type,		Loan amount & type,		Name & city,		Mobile & Email,		Net Income & Occupation,		Query status & Desc,		Follow up date & Type,		,Assign To,		Action,		Query Status Update
		*/
		$arr = array('0' => array('query_id' => '2463792', 'query_datetime' => '2019-01-21 05:29:50', 'tool_type' => 'Eligibility Form', 'form_type' => 'Long form', 'auto' => 'yes', 'loan_amt' => '2,278,152', 'loan_type' => 'Home Loan', 'name' => 'Ravindra Ghanashyambhai', 'city' => 'Baroda', 'mobile' => '8849649723', 'email' => 'raviagravat@hotmail.com', 'income' => '29300', 'occupation' => 'Salaried', 'query_st_description' => 'Plz Create Case', 'follow_up' => '0000-00-00', 'assign_to' => 'Lakshya Narang', 'total_queries' => '102', 'action' => '2463792', 'query_status_update' => 'Query Status'), '1' => array('query_id' => '2463789', 'query_datetime' => '2019-01-25 05:29:55', 'tool_type' => 'New PHP Form', 'form_type' => 'Short form', 'auto' => 'no', 'loan_amt' => '2,500,000', 'loan_type' => 'Loan Against Property', 'name' => 'Laxmikant vhora', 'city' => 'Nagpur', 'mobile' => '9881582465', 'email' => 'nayeemthoker786@gmail.com', 'income' => '55000', 'occupation' => 'Self Employed - Business', 'query_st_description' => 'Open + Auto', 'follow_up' => '0000-00-00', 'assign_to' => 'Bharti', 'total_queries' => '115', 'action' => '2463789', 'query_status_update' => 'Query Status'), '2' => array('query_id' => '2463792', 'query_datetime' => '2019-01-21 05:29:50', 'tool_type' => 'Eligibility Form', 'form_type' => 'Long form', 'auto' => 'yes', 'loan_amt' => '2,278,152', 'loan_type' => 'Home Loan', 'name' => 'Ravindra Ghanashyambhai', 'city' => 'Baroda', 'mobile' => '8849649723', 'email' => 'raviagravat@hotmail.com', 'income' => '29300', 'occupation' => 'Salaried', 'query_st_description' => 'Plz Create Case', 'follow_up' => '0000-00-00', 'assign_to' => 'Lakshya Narang', 'total_queries' => '102', 'action' => '2463792', 'query_status_update' => 'Query Status'), '3' => array('query_id' => '2463789', 'query_datetime' => '2019-01-25 05:29:55', 'tool_type' => 'New PHP Form', 'form_type' => 'Short form', 'auto' => 'no', 'loan_amt' => '2,500,000', 'loan_type' => 'Loan Against Property', 'name' => 'Laxmikant vhora', 'city' => 'Nagpur', 'mobile' => '9881582465', 'email' => 'nayeemthoker786@gmail.com', 'income' => '55000', 'occupation' => 'Self Employed - Business', 'query_st_description' => 'Open + Auto', 'follow_up' => '0000-00-00', 'assign_to' => 'Bharti', 'total_queries' => '115', 'action' => '2463789', 'query_status_update' => 'Query Status'));
		return $arr;
	}

	public function getAllQueriesWithParams($data, $action) {
		//Paramter 1 => $data => It is in the following format
		//Array ( [name] => [query_id] => [phone] => [city_name] => [city_sub_group] => Select City [from_loan_amt] => [to_loan_amt] => [net_incm_from] => [net_incm_to] => [date_from] => [date_to] => [annual_turnover] => Annl. Turnover [query_status] => Query Status [loan_type] => Loan Type [use_assign] => User Assign [tool_type] => Tool Type [auto_case] => Auto Case [campaign_source] => Campaign Src [_token] => ZJehWcq3lbE3XtXgQpjtI867jN6pbTZBPYQvHuJe [filter] => Filter )
		//Paramter 1 => $action => Filter / Clear (Reset)
		$arr = array('0' => array('query_id' => '2463792', 'query_datetime' => '2019-01-21 05:29:50', 'tool_type' => 'Eligibility Form', 'form_type' => 'Long form', 'auto' => 'yes', 'loan_amt' => '2,278,152', 'loan_type' => 'Home Loan', 'name' => 'Ravindra Ghanashyambhai', 'city' => 'Baroda', 'mobile' => '8849649723', 'email' => 'raviagravat@hotmail.com', 'income' => '29300', 'occupation' => 'Salaried', 'query_st_description' => 'Plz Create Case', 'follow_up' => '0000-00-00', 'assign_to' => 'Lakshya Narang', 'total_queries' => '102', 'action' => '2463792', 'query_status_update' => 'Query Status'), '1' => array('query_id' => '2463789', 'query_datetime' => '2019-01-25 05:29:55', 'tool_type' => 'New PHP Form', 'form_type' => 'Short form', 'auto' => 'no', 'loan_amt' => '2,500,000', 'loan_type' => 'Loan Against Property', 'name' => 'Laxmikant vhora', 'city' => 'Nagpur', 'mobile' => '9881582465', 'email' => 'nayeemthoker786@gmail.com', 'income' => '55000', 'occupation' => 'Self Employed - Business', 'query_st_description' => 'Open + Auto', 'follow_up' => '0000-00-00', 'assign_to' => 'Bharti', 'total_queries' => '115', 'action' => '2463789', 'query_status_update' => 'Query Status'), '2' => array('query_id' => '2463792', 'query_datetime' => '2019-01-21 05:29:50', 'tool_type' => 'Eligibility Form', 'form_type' => 'Long form', 'auto' => 'yes', 'loan_amt' => '2,278,152', 'loan_type' => 'Home Loan', 'name' => 'Ravindra Ghanashyambhai', 'city' => 'Baroda', 'mobile' => '8849649723', 'email' => 'raviagravat@hotmail.com', 'income' => '29300', 'occupation' => 'Salaried', 'query_st_description' => 'Plz Create Case', 'follow_up' => '0000-00-00', 'assign_to' => 'Lakshya Narang', 'total_queries' => '102', 'action' => '2463792', 'query_status_update' => 'Query Status'), '3' => array('query_id' => '2463789', 'query_datetime' => '2019-01-25 05:29:55', 'tool_type' => 'New PHP Form', 'form_type' => 'Short form', 'auto' => 'no', 'loan_amt' => '2,500,000', 'loan_type' => 'Loan Against Property', 'name' => 'Laxmikant vhora', 'city' => 'Nagpur', 'mobile' => '9881582465', 'email' => 'nayeemthoker786@gmail.com', 'income' => '55000', 'occupation' => 'Self Employed - Business', 'query_st_description' => 'Open + Auto', 'follow_up' => '0000-00-00', 'assign_to' => 'Bharti', 'total_queries' => '115', 'action' => '2463789', 'query_status_update' => 'Query Status'));

		if(!empty($arr)) {
			$return = array();
			if($action == 'Filter') {
				foreach($arr as $a) {
					if($a['query_id'] == $data['query_id']) {
						$return[] = $a;
						continue;
					}
				}
			} else if($action == 'Clear') {
				$return = $arr;
			} else {
				$return = array();
			}
		} else {
			$return = array();
		}
		return $return;


		// echo 'Inside Model';
		// echo '<br><pre>';
		// print_r($data);
	}

	/* Dropdowns in Query Listing */
	public function getCitySubGroup() {
		return array('0' => 'Bangalore', '1' => 'Chennai', '2' => 'Hyderabad', '3' => 'MMR', '4' => 'NCR', '5' => 'Others - Other', '6' => 'Pune Nagpur Nashik', '7' => 'Tier 1 New', '8' => 'Tier 1 South', '9' => 'Tier 2 New', '10' => 'Tier 2 South', '11' => 'Tier 3 New', '12' => 'Tier 3 South');
	}

	public function getAnnualTurnOver() {
		return array('0' => 'Less than Rs. 12 lakh', '1' => 'Rs. 12 - 30 lakh', '2' => 'Rs. 30 - 50 lakh', '3' => 'Rs. 50 - 1 crore', '4' => 'More than 1 crore');
	}

	public function getQueryStatus() {
		return array('0' => 'Duplicate', '1' => 'Junk', '2' => 'Plz Create Case', '3' => 'Open', '4' => 'Ringing/ SO1', '5' => 'Ringing/ SO2', '6' => 'Ringing/ SO3', '7' => 'SBI Only', '8' => 'Not Eligible - Cibil / profile', '9' => 'Not Eligible - Property', '10' => 'Not Eligible - Income', '11' => 'Not Interested', '12' => 'Finally not contactable', '13' => 'Lost to competition', '14' => 'Open + Auto', '15' => 'Ringing + Auto', '16' => 'Reassign');
	}

	public function getLoanType() {
		return array('0' => 'Business Loan', '1' => 'Car Loan', '2' => 'Commercial Property Loan', '3' => 'Consumer Loan', '4' => 'Credit Card', '5' => 'Credit Report', '6' => 'Education Loan', '7' => 'FD', '8' => 'Gold Loan', '9' => 'Home Loan', '10' => 'Loan Against Property', '11' => 'Personal Loan', '12' => 'Professional Loan', '13' => 'Savings Account', '14' => 'Top Up Loan', '15' => 'Two Wheeler Loan');
	}

	public function getUserAssign() {
		return array('0' => 'Akash Lal', '1' => 'Prashant Kumar', '2' => 'Yajuvendra Singh');
	}

	public function getToolType() {
		return array('0' => 'App', '1' => 'BT Form', '2' => 'Budget Calc', '3' => 'Cibil Form', '4' => 'CR', '5' => 'CREPF', '6' => 'CREPF_Customer', '7' => 'CREPF_ScoreBased', '8' => 'CR_Customer', '9' => 'CR_ScoreBased', '10' => 'Direct', '11' => 'Eligibility Form', '12' => 'GL Eligibility', '13' => 'Leave Intent', '14' => 'Mailer Form', '15' => 'MEC Form', '16' => 'New PHP Form', '17' => 'Partner', '18' => 'PHP Form');
	}

	public function getCampaignSource() {
		return array('0' => 'Google', '1' => 'SVG Campaign', '2' => 'Referral', '3' => 'Mitula', '4' => 'Wunder Cab');
	}
}
