<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supply ;
use App\order ;

class supplyController extends Controller
{
    

public function supply(){
    	return view('supplier.supply.supplyProduct');
    }



    public function savesupply(Request $request)
   {
   	
   		$supplyEntry = new supply();





		$this->validate($request, [
        'code' => 'required|unique:supplies|max:255',
        'name' => 'required',
    ]);


		$supplyEntry->code = $request->input('code'); ;
		$supplyEntry->name = $request->input('name');
		$supplyEntry->quantity = $request->input('quantity') ;

	

	$supplyEntry->save();

	return redirect('/supply')->with('msg', 'Successfully inserted data');

   	
   }







public function orderview(){

$orderview = order::all();



return view('supplier.supply.orderView', ['actManage'=>$orderview ]);


    	
    }








}
