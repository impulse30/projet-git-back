<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RejectUrlParameters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        {
            if (!empty($request->query())) {
                return response()->json(['error' => 'URL parameters are not allowed.'], 400);
            }
    
            return $next($request);
        }
    }
}
