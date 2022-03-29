<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    
    protected function submit(Request $request)
    {
        // dd($request->all());
        // if($request->('image')) {
            $dir = 'uploads/';

            $ktp = $request->file('ktp');
            $foto_ktp = $ktp->getClientOriginalName().'.'.$ktp->getClientOriginalExtension();
            Storage::putFileAs($dir, $ktp, $foto_ktp);
            
            $kk = $request->file('kk');
            $foto_kk = $kk->getClientOriginalName().'.'.$kk->getClientOriginalExtension();
            Storage::putFileAs($dir, $kk, $foto_kk);
 
            $request->request->add([
               'foto_ktp'  => $foto_ktp,
               'foto_kk'  => $foto_kk,
            ]);
        //  }

        $returnHTML = view('test.hasil',['record' => $request->all()])->render();
        return response()->json( 
            array('success' => true, 
                    'html'=> $returnHTML) );
    }

}
