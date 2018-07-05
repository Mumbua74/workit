<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\gym_locations94120;


class gym_locationController extends Controller
{
	
	public function showGym(Request $req)
	{
		$data = gym_locations94120::all();

		return LocationResource($data);
	}
}
