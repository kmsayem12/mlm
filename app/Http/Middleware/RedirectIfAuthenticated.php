<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            if (Auth::guard($guard)->user()->type == 1) {
                return redirect('/admin');
            } else if (Auth::guard($guard)->user()->type == 2){
                return redirect('/printer');
            }
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
