<?php // app/Http/Controllers/PagesController.php
namespace AppHttpControllers;

use AppHttpRequests;
use AppHttpControllersController;
use App\Http\Controllers\Controller;
use DB;
use IlluminateHttpRequest;

class PagesController extends Controller {
    public function about ()  {
        return view ('Pages.about');
    }
}

class UserController extends Controller {
    //データベース接続
    public function database () {
        $cats = DB::select('select name from cat_sousenkyo.cat_info;')
        return view('Pages.database', ['name' => $name]);
    }
}

