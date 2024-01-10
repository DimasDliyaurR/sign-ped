<?php

namespace App\Http\Controllers;

// use App\Models\signature;
use App\Models\signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignatureController extends Controller
{
    public function index()
    {
        return view('sign');
    }

    public function upload(Request $request)
    {
        $folderPath = public_path('upload/');

        $image_parts = explode(";base64,", $request->signed);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $file = 'upload/' . uniqid() . '.' . $image_type;

        // Insert data

        DB::table("sign-temp")->insert([
            "img" => $file
        ]);

        file_put_contents($file, $image_base64);

        return back()->with('success', 'success Full upload signature');
    }

    /*
    Menampilkan sign
    */

    public function show_sign()
    {
        return view('show-sign', [
            "data" => signature::all(),
        ]);
    }
}
