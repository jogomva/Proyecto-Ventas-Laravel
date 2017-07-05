<?php

namespace sisVentas52\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas52\Http\Requests;
use DB;

class DownloadController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');

    }
	
    public function downfunc()
    {
    	$downloads=DB::table('articulo')->get();
    	return view('download.viewfile',compact('downloads'));
    }
}
