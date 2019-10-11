<?php

namespace App;
use Illuminate\Support\Facades\DB;

class People
{
	public static $ppl = [
		["first_name"=>"cody","last_name"=>"duder","age"=>38,"email"=>"codyduder@causelabs.com","secret"=>"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="],
		["first_name"=>"ladee","last_name"=>"linter","age"=>99,"email"=>"lindaladee@causelabs.com","secret"=>"cmVzb3VyY2UgdmlvbGF0aW9u"]
	];

	public static function all() {
		return DB::table('people')->get();
	}

	public static function create($request) {

		return DB::table('people')->insert(
			['json'=>$data,'ip_address'=>$ip,'timestamp'=>time()]
		);
	}
}
