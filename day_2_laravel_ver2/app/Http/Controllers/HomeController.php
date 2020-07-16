<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // DB::update("update users set address = '123456' where email = 'loclion17@gmail.com'");
        return view('home');
    }

    public function updateInfo(Request $request) {
        $validatedData = $request->validate([
            'zip_code' => 'max:10',
            // 'body' => 'required',
        ]);

        $address = $request->address;
        $zipCode = $request->input("zip-code");
        // echo "<p>asdasd</p>";
        $email = Auth::user()->email;
        // dd(auth()->user()->email);
        DB::update('update users set address = ?, zip_code = ? where email = ?', [$address, $zipCode, $email]);
        return redirect('/home');
    }

    public function updateInfoShow() {
        return view("/auth/profile_update");
    }

    public function showProfile() {

        $users = DB::select('select * from users where email = ?', [Auth::user()->email]);
        // dd($users);

        return view('auth/profile', ['users' => $users]); 
    }
}
