<?php
namespace App\Http\Controllers\fileController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class FileUploaderController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('view-hours');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        return view('view-hours', ["test" => dump($request)]);
    }
}
