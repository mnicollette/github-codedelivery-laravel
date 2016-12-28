<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{

    public function __construct()
    {
        Auth::class;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::check()){
            dd("Opa, chegou");
            return redirect()->route('admin.categories.index');
        }else{

            //dd("Opa, veio");
            return redirect('/login');
        }
        return $next($request);
    }
}
