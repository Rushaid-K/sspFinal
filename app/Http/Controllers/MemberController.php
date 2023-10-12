<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class MemberController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password'=>'required',
        ]);
        $newMember = member::create($data);
        return redirect(route('member.login'));
    }
}
