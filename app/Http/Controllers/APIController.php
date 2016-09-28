<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class APIController extends Controller
{
  public function api(Request $request)
  {
    $initialrequest = file_get_contents('http://leaderboard.battleroyalegames.com/api/player/'. $request->get('playerlookup'));
    $parse = json_decode($initialrequest, true);

    return view('search')->with('parse', $parse);
  }
}
