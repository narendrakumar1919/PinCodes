<?php

namespace App\Http\Controllers;

use App\Models\Pincode;
use App\Models\ZipCode;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\District;

class PincodeController extends Controller
{
    function index(Request $request)
    {
        $states=State::all();
        if($request->state){
              if($request->state && $request->district&& $request->area){

                $area_pincodes=ZipCode::where('title',$request->area)->get();
                $pincodes=ZipCode::where('district_id',$request->district)->get();
                $districts=District::where('state_id',$request->state)->get();
                 return view('welcome' ,compact('states','districts','pincodes','area_pincodes'));
                  
              }elseif($request->state && $request->district){
                $pincodes=ZipCode::where('district_id',$request->district)->get();
                $districts=District::where('state_id',$request->state)->get();
                 return view('welcome' ,compact('states','districts','pincodes'));
              }else{
                $districts=District::where('state_id',$request->state)->get();
                return view('welcome' ,compact('states','districts'));
              }


        }
        return view('welcome' ,compact('states'));
    }
}
