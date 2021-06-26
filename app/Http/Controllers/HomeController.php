<?php

namespace App\Http\Controllers;

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
        $domain = 'https://www.mienxy.com';
        $client = new \GuzzleHttp\Client();
        $jinsiaApi = $client->get($domain.'/api/devs/jinsia');

        if($jinsiaApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        }
    
        // $i =  array_column(json_decode($iApi->getBody()), 'url_content');      
    
        $jinsiaTaarifa = json_decode($jinsiaApi->getBody(), true);

        // $response = json_decode($result->getBody(),true);
        // $user =   $response['user'];//access key


$mme = $jinsiaTaarifa['mme'];
$mke = $jinsiaTaarifa['mke'];
        

        return view('home')->with(array('mme'=>$mme, 'mke'=>$mke));
    }
}
