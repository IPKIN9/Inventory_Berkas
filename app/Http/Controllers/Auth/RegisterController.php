<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.Register');
    }
    public function insert(UsersRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'name' => $request->name,
            'username'  => $request->username,
            'password' => Hash::make($request->password),
            'created_at' => $date,
            'updated_at' => $date
        );
        DB::table('users')->insert($data);
        return redirect(route('login'))->with('status', 'Akun berhasil terdaftar');
    }
}
