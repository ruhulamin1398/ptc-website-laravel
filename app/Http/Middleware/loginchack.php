<?php

namespace App\Http\Middleware;

use Closure;

class loginchack
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


        session_start();

        if (!isset($_SESSION["username"])) {
            return redirect(route('login'));

        } else {
            return $next($request);
        }
    }
}
