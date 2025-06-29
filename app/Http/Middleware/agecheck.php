<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "<h3>AgeCheck Middleware</h3>";
        // print_r($request);
        if($request->age<18){
            die("<h1>Access Denied: You must be at least 18 years old.</h1>");
        }
        return $next($request);
    }
}
