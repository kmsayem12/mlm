<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() &&  Auth::user()->type == 1) {
            return $next($request);
        }else if (Auth::user()->type == 2) {
            return redirect('printer');
        } else {
            return redirect()->route('admin.login');
        }

    }
}
