<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\People;

class PeopleController extends Controller
{
    public function all() {
        $people = People::all();

        return response()->json($people,200);
	}

	public function store(Request $request) {
		
	}
}
