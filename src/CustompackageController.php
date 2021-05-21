<?php

namespace Tarunsmtgroup\Custompackage;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustompackageController extends Controller
{
    public function index(){
    	return view('custompackage::test',[]);
    }
}
