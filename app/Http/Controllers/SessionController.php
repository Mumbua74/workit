<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\session_94120;
use App\Http\Resources\SessionResource;

class SessionController extends Controller
{
    public function save(Request $req)
    {
    	$exercise_name = $req['exercise_name'];
    	$rep_number = $req['rep_number'];
    	$location_name = $req['location_name'];
    	$date = $req['date'];

    	$session_94120 = new session_94120;
    	$session_94120->exercise_name = $exercise_name;
    	$session_94120->rep_number = $rep_number;
    	$session_94120->location_name = $location_name;
    	$session_94120->date = $date;
    	$session_94120->save();

    	return new SessionResource ($session_94120);
    }

    public function session(Request $req)
    {
    	$data = session_94120::all();
        return new SessionResource($data);

    }
}
