<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CustomCsrfCookieController extends Controller
{
    public function show(Request $request)
    {
        // Create a response that sets the XSRF-TOKEN cookie
        // return response()->json(['message' => 'CSRF cookie set'])
        //                 ->withCookie(
        //                     Cookie::make('XSRF-TOKEN', csrf_token(), 60, '/', null, false, true)
        //                 );

        $csrfToken = csrf_token();

        // Create a response that sets the XSRF-TOKEN cookie and returns the CSRF token in the response body
        return response()->json(['csrf_token' => $csrfToken])->withCookie(
            Cookie::make('XSRF-TOKEN', $csrfToken, 60, '/', null, false, true)
        );


        // Ensure the CSRF token is the same by using the session's CSRF token
        // $csrfToken = Session::token();

        // // Create a response that sets the XSRF-TOKEN cookie and returns the CSRF token in the response body
        // return response()->json(['csrf_token' => $csrfToken])->withCookie(
        //     Cookie::make('XSRF-TOKEN', $csrfToken, 60, '/', null, false, true)
        // );

        // $csrfToken = Cookie::get('XSRF-TOKEN');

        // return response()->json(['csrf_token' => $csrfToken, 'nn' => 'jjjj']);
    }
}
