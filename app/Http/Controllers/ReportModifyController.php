<?php

namespace App\Http\Controllers;

use App\reporting;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class ReportModifyController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'report_date' => ['required'],
            'report_amount' => ['integer | required'],
            'report_detail' => ['required'],
        ]);
    }
    //
    public function formSubmit(Request $request){
        DB::table('reportings')->insert([
            'report_date' => $request->report_date,
            'report_type' => $request->report_type,
            'report_amount' => $request->report_amount,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'report_detail' => $request->report_detail,
            'updated_at' => $request->report_date,
            'created_at' => $request->report_date,
        ]);
//        reporting::create([
//
//            'report_date' => $request->report_date,
//            'report_type' => $request->report_type,
//            'report_amount' => $request->report_amount,
//            'name' => Auth::user()->name,
//            'email' => Auth::user()->email,
//            'report_detail' => $request->report_detail,
//        ]);
        return redirect()->action('HomeController@showTotal');
    }

}
