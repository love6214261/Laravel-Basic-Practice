<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function showTotal()
    {
        $reportings = DB::table('reportings')->orderBy('report_date', 'asc')->get();
        $totalRevenue = DB::table('reportings')
            ->where('report_type', "Revenue")
            ->sum('report_amount');
        $totalExpenses = DB::table('reportings')
            ->where('report_type', "Expenses")
            ->sum('report_amount');
        return view('reportSystem/total_report',['reportings'=>$reportings,"totalRevenue"=>$totalRevenue,"totalExpenses"=>$totalExpenses]);
    }

    public function modifyTotal()
    {
        return view('reportSystem/modify_report');
    }
}
