<?php

namespace App\Http\Middleware;

use Closure;

class checkIP
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
        if($request->ip()!= "10.12.28.20"){
            abort(403,"you cant access website from this ip address");
    }
        else{

            return $next($request);
    }

    }
}
