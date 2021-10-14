<?php

namespace DemoPackage\MinhTien\Timezone\Controllers;

//use App\Http\Controllers\Controller;
//use Carbon\Carbon;

class TimezoneController extends Controller
{
    public function index($timezone = NULL)
    {
        $current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();
        return view('timezones::timezone', compact('current_time'));
    }
}
