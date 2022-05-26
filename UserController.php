<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //

    public function signup() {
        return view('user.signup');
    }

    public function find()
    {
        $user = User::find(1);
        dump($user);
    }

    public function where()
    {
        $user = User::where('username', 'Nelly Joy')->first();

        // Echo semua data
        echo "$user->email | $user->username | $user->role";
        echo "{$user->student->tanggal_lahir}";
    }

    // Masih banyak fungsi lain, entar tambahin (CRUD)
}
