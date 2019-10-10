<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\People;

class PeopleController extends Controller
{
    public function all() {
		return response()->json(People::all(),200);
	}

	public function create(Request $request) {
		$data = json_decode($request->json(), true);

		$vald = Validator::make($data,[
			'first_name' => 'required|string',
			'last_name' => 'required|string',
			'age' => 'required|digits_between:0,99',
			'email' => 'required|email|unique:users,email',
			'secret' => 'required|string'
		])->validate();

		return response()->json(People::create($data),201);
	}
}
