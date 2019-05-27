<?php

namespace App\Http\Controllers\Api;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CafeController extends Controller
{
   	public function getCafes()
   	{
   		$cafes = Cafe::all();
   		return response()->json($cafes);
   	}

   	public function postNewCafe()
   	{
   		$cafe = new Cafe();
	    $cafe->name     = Request::get('name');
	    $cafe->address  = Request::get('address');
	    $cafe->city     = Request::get('city');
	    $cafe->state    = Request::get('state');
	    $cafe->zip      = Request::get('zip');
	    $cafe->save();

	    return response()->json($cafe, 201);
   	}

   	public function getCafe($id)
   	{
   		$cafe = Cafe::find($id);
   		return response()->json($cafe);
   	}
}
