<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //

function getUser() {
    $response = Http::get("https://jsonplaceholder.typicode.com/users/1");
    $data = json_decode($response->body());
    // echo "this is getuser function";

    return view('user', ['data' => $data]);
}
}
