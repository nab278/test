<?php

namespace App\Http\Middleware;

use Closure;

class test
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


            echo "<h4>" . "touched the moddle ware" ."</h4>";

            // if(1){
            //     // return "interupted";
            //     return view('test.index');
            // }

        return $next($request);
    }
}
