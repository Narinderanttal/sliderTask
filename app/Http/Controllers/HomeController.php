<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use DB;
use App\Models\Heading;
use App\Models\Childheading;
use App\Models\Subchildheading;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $Heading = Heading::get();
        return view('home',['parent' => $Heading ]);
    }

    public function uploadfile(Request $request)
    {
        $request->validate([
            "file" => "required|mimes:pdf|max:10000"
        ]);

        if ($request->hasFile('file')) 
        {
            $file = $request->file('file');
            $name = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/storage/file');
            $file->move($destinationPath, $name);

            $addfile = new FileUpload;
            $addfile->file = $name;
            $addfile->save(); 
        }
       
        return response()->json('File uploaded successfully');
    }

    public function test()
    {
        echo "test";
    }
}