<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        return view('waiting');
    }
    
    public function intro(){
        return view('intro');
    }

    public function create()
    {
        $user = Auth::user();
        if($user->is_admin === 'admin') {
            return view('admin.create');
        }

    }
}
