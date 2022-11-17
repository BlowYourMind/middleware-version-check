<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VersionCheck
{

    public function handle(Request $request, Closure $next)
    {

        if(!$request['version'] == 2)
        {
            return response()->json(['error' =>'this version does not exist']);
        }

        return $next($request);
    }
}
