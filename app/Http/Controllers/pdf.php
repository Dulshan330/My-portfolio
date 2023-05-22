<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

class pdf extends Controller
{
    //
    public function download_resume(Request $request){
    if(Storage::disk('local')->exists("pdf/$request->file")){
        $path = Storage::disk
        }
    }
}
