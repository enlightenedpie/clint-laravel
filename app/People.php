<?php

namespace App;

class People
{
	public static $people = [
		["first_name"=>"cody","last_name"=>"duder","age"=>38,"email"=>"codyduder@causelabs.com","secret"=>"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="],
		["first_name"=>"ladee","last_name"=>"linter","age"=>99,"email"=>"lindaladee@causelabs.com","secret"=>"cmVzb3VyY2UgdmlvbGF0aW9u"]
	];

	public static function all() {
		return self::$people;
	}

	public static function store() {
		
	}
}
