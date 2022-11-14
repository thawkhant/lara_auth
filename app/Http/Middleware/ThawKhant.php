<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThawKhant
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
        // echo "This is testing from ThawKhant middleware";
       // dd($request);  // bal ka lar dal bal ko twar dal bar nyar paw bar method lal paw lan
        //  dd(Auth::user()->toArray());
        // dd(Auth::user()->role);

        if(Auth::user()->role != 'admin'){
            // return abort(404);
            return back()->with(['authMessage' =>"You don't have permission for these access. You are not admin"]);
        }
        return $next($request);
    }
}
