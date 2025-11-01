<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "i run middleware";
        
        if(Auth::check() && Auth::user()->role === "admin"){
             return $next($request);
        }else{
            return redirect()->route('login')
            ->with(['status' => 'error', 'message' => "You Are not elgigble for this page"]);
        }
       
    }
}
