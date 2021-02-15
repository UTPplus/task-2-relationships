<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Company;

class UserController extends Controller
{
    public function show(){

        // $user= User::with('company')->get();
        // dd($user);


        // $conpany = Company::with('user')->get();

        // dd($conpany);


        // $country = Country::with( 'company')->get();

        // dd($country);

        $contryUsers = Country::with('users')->get();
        dd($contryUsers);
        return veiw('user');
    }
}
