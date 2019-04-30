<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\order ;
use App\supply ;

class orderController extends Controller
{
    public function order(){
    	return view('user.order.orderProduct');
    }



    public function saveorder(Request $request)
   {
   	
   		$orderEntry = new order();





		$this->validate($request, [
        'code' => 'required|unique:orders|max:255',
        'name' => 'required',
    ]);


		$orderEntry->code = $request->input('code'); ;
		$orderEntry->name = $request->input('name');
		$orderEntry->quantity = $request->input('quantity') ;

	

	$orderEntry->save();

	return redirect('/order')->with('msg', 'Successfully inserted data');

   	
   }






public function supplyview(){

$supplyview = supply::all();



return view('user.order.supplyView', ['actManage'=>$supplyview ]);


     
    }








}
