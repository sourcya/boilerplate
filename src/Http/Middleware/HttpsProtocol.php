<?php
namespace Sourcya\BoilerplateBox\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next)
    {
//        if (!$request->secure() && App::environment() === 'production') {
//        return redirect()->secure($request->getRequestUri());
//        }

        return $next($request);
    }
}