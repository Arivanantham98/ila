<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateLaw extends Controller
{
    public function arbiration()
    {
        return view('categories.corporatelaw.arbiration');
    }
    public function bankingfinance()
    {
        return view('categories.corporatelaw.bankingfinance');
    }
    public function croporate()
    {
        return view('categories.corporatelaw.corporate');
    }
    public function customcentralexcercise()
    {
        return view('categories.corporatelaw.customcentralexcercise');
    }
    public function gst()
    {
        return view('categories.corporatelaw.gst');
    }
    public function startup()
    {
        return view('categories.corporatelaw.startup');
    }
    public function tax()
    {
        return view('categories.corporatelaw.tax');
    }
    public function tradecopyrights()
    {
        return view('categories.corporatelaw.tradecopyrights');
    }
}
