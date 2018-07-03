<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instructors_94120;

class instructorController extends Controller
{
   public function showinstructors(Request $req)
	{
		$data = instructors_94120::all();

		return $data;
	}

	public function saveInstructor(Request $req)
	{
		$name = $req['name'];
		$contact = $req['contact'];
		$email = $req['email'];
		$gender = $req['gender'];
		$profile_photo = $req['profile_photo'];

		$instructors_94120 = new instructors_94120;
		$instructors_94120->name = $name;
		$instructors_94120->contact = $contact;
		$instructors_94120->email = $email;
		$instructors_94120->gender = $gender;
		$instructors_94120->profile_photo = $profile_photo;
		$instructors_94120->save();

		return $instructors_94120->toJson();		
	}

}
