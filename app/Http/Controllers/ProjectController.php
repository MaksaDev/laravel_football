<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //

    public function getData(Request $request) {

        $date = date('Y-m-d');
       // $date = "2021-11-28";
        $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=jokic.maksim17&token=98dea6c01ea0dd2fece79015e12876a2&t=schedule&d=".$date."&league_id=1609");
        //$response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=jokic.maksim17&token=98dea6c01ea0dd2fece79015e12876a2&t=season&season_id=10462");//season id
        return view('index',['response'=>$response]);


    }


    public function about(Request $request) {

        return view('about');


    }



}
