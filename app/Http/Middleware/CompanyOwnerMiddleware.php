<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompanyOwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $employ = $request->route('employ');

        if($employ->user_id != auth()->user()->id){

            return redirect('/employees/recent')->with('Error', 'You cant edit this!!');
        }


        return $next($request);     
    }
}
