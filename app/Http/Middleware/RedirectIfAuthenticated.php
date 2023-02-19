<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
//    public function handle(Request $request, Closure $next, ...$guards)
//    {
//        $guards = empty($guards) ? [null] : $guards;
//
//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {
//                return redirect(RouteServiceProvider::HOME);
//            }
//        }
//
//        return $next($request);
//    }


    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
            $place = Auth::user()->place;
            $id = Auth::user()->id;
            switch ($place) {
                case 'university':
                    return redirect('/uni_dashboard/' . $id);
                case 'school':
                    return redirect('/school_dashboard/' . $id);
                default:
                    return redirect('/home');
            }
        }
        return $next($request);
    }
}
