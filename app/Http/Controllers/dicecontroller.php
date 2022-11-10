<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class dicecontroller extends Controller{
    public function image(Request $request){
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
    
        Storage::putFileAs('/public/images/'.$file, $imageName);
        $url = 'public/images/'.$imageName;
    }

}



?>