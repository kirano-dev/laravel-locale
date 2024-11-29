<?php

namespace KiranoDev\LaravelLocale\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController
{
    public function __invoke(string $locale, Request $request): RedirectResponse
    {
        cache()->set('locale.'.$request->ip(), $locale);

        return back();
    }
}