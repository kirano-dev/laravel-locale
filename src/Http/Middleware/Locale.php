<?php

namespace KiranoDev\LaravelLocale\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    public function handle(Request $request, Closure $next): Response
    {
        $key = 'locale.'.request()->ip();

        if(cache()->has($key)) {
            app()->setLocale(
                cache()->get($key)
            );
        }

        return $next($request);
    }
}
