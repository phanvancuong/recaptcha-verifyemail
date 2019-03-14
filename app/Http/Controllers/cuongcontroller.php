<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hehehe;
use App\Http\Requests\cuongrequest;

class cuongcontroller extends Controller
{
    public function them(cuongrequest $request){

    	$img = $request->file('fImages');
    	$img_name = $img->getClientOriginalName();


    	 $hehehe =new hehehe;
     	 $hehehe->name = $request->txtMonHoc;
    	 $hehehe->heheheid = $request->txtgiatien;
    	 $hehehe->image = $img_name;
    	 $hehehe->save();

    	$duongdan = 'public\upload\image';
    	$img->move($duongdan, $img_name);
    	
    	
    	
    	 return redirect('form/dangky');
    	// echo "<pre>";
    	// echo "ten hình:".($request->file('fImages')->getClientOriginalName());
    	// echo "size:".($request->file('fImages')->getSize());
    	// echo "loai hinh:".($request->file('fImages')->getMimeType());
    	// echo "đường dẫn:".($request->file('fImages')->getRealPath());
    	// echo "</pre>";

    }
}
