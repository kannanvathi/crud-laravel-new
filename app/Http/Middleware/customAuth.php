<?php

namespace App\Http\Middleware;

use Closure;

class customAuth
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
        $path = $request->path();
        $userSession = $request->session()->get('user');
        if(($path == 'login' || $path == 'register') && $userSession){
            return redirect('/');
        }
        else if($path != 'login' && $path != 'register' && !$userSession){
            return redirect('login');
        }
        return $next($request);
    }
}
