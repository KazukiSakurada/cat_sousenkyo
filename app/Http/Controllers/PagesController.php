<?php // app/Http/Controllers/PagesController.php
namespace App\Http\Controllers;

use AppHttpRequests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagesController;
use DB;
use IlluminateHttpRequest;

class PagesController extends Controller {
    public function about ()  {
        $data = [];
            $data ["first_name"] = "Luke";
            $data ["last_name"] = "Skywalker";
            return view('pages.about', $data);
        return view ('Pages.about');
    }
}
