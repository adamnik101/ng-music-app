<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//
//header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Content-Type');
//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json, charset=utf-8');
//// header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
//header('Access-Control-Allow-Methods: *');
class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://localhost:4200')
            ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, X-Auth-Token')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
    }
}
