<?php // app/Http/Controllers/DatabaseController.php
namespace App\Http\Controllers;

use AppHttpRequests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DatabaseController;
use DB;
use IlluminateHttpRequest;


class DatabaseController extends Controller {
    //$B%G!<%?%Y!<%9@\B3(B
    public function database () {
        $cats = DB::select('select cat_url from cat_sousenkyo.cat_info;');
        return view('Pages.database')->with('cats', $cats);
    }
}

