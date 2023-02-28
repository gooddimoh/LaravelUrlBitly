<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Urls;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Illuminate\Support\Str;

class FrontendController extends Controller
{

    public function __invoke(Request $request, Response $response)
    {
        return view('index');
    }

    public function index()
    {
////        $urls = Urls::deleted();
////        $urls = Urls::create();
////        $urls = new Urls();
////
////        $urls->delete();
////
////        $shorturl = " ";
////        echo 'welcome';
        return view('index');
    }


}
