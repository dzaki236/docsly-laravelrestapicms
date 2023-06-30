<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StrictForGuestEnvironment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if members, its for member only, but if guest it can for guest
        $env = env_environments()->available;
        if ($env == 'member' && auth()->user() != null) {
            # code for member and must login
            $returned = abort(403, 'Forbidden!, no has access');
        }

        if ($env == 'guest') {
            # code for guest and you does not must login
            $returned = $next($request);
        }
        return $returned;
    }
}
