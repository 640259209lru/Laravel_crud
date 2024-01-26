<?php

namespace App\Http\Controllers;

use  App\models\company;
use Illuminate\Http\Request;

class companyCRUDController extends Controller
{
    // create Index
    public function index( ) {
        $data['companies'] = company::orderBy('id','desc')->paginate(5);
        return view('companies.index' , $data);
    }
    
    // create resource
    public function create() {
        return view ('companies.create');
    }
}
