<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMidelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check if user->role_id > 1 echo "You are not allowed to access this page";
        if (auth()->user()->role_id > 1) {
            return redirect()->route('voyager.dashboard');
        }
        return $next($request);
    }
}
