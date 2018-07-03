<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 $table->increments('id');
            $table->string('gym_name');
            $table->string('location');
            $table->timestamps();

class gym_locationController extends Controller
{
	public function saveGym(Request $req)
	{
		$gym_name = $req['gym_name'];
		$location = $req['location'];
		$opening = $req['opening'];
		$closing = $req['closing'];

		$gym_locations94120 = new gym_locations94120;
		$gym_locations94120->gym_name = $gym_name;
		$gym_locations94120->location = $location;
		$gym_locations94120->opening = $opening;
		$gym_locations94120->closing = $closing;

		$gym_locations94120->save();

		return $gym_locations94120->toJson();
	}

	public function showGym(Request $req)
	{
		$data = gym_locations94120::all();

		return $data->toJson();
	}

	public function gymNear(Request $req)
	{
		$location->req->input('location');

		$data = gym_locations94120::where('location',$location)->get();

		return $data->toJson();

	}
}
