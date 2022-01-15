<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TotalLoadController extends Controller
{
    public function showTotal(){
        $reportings = DB::table('reportings')->get();
        foreach ($reportings as $reporting) {
            echo $reporting->report_date;
            echo $reporting->report_type;
            echo $reporting->report_amount;
            echo $reporting->name;
            echo $reporting->report_detail;
        }
//        return  $users;
    }
}
