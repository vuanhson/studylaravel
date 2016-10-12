<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class testcontroller extends Controller
{

  public function showinfo(){
      //return view('testviewctl');
      return redirect()->route('redir');
  }
}
