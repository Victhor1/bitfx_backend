<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMaillable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProveedorController extends Controller
{
    public function save(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = 'proveedor';
        $user->password = Hash::make('password');
        $user->save();

        $mail = new NewUserMaillable;
        Mail::to($user->email)->send($mail);

        return response(['user' => $user], 200);
    }
}
