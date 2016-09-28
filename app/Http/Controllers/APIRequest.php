<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class APIRequest extends Controller
{
    public function api(Request $request)
    {
      $data = array(
          'name'  => 'Rakesh',
          'email' => 'sharmarakesh395@gmail.com'
      );

      return View::make('search')->with('data', $data);
    }
}
