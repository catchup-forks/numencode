<?php

namespace Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * The auth guard.
     *
     * @var $guard
     */
    protected $guard = 'admin';

    /**
     * Check if user is authenticated or else display login screen.
     *
     * @param Request  $request Instance of Illuminate\Http\Request
     * @param callable $next    Instance of Closure
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard($this->guard)->check()) {
            return redirect()->route('admin.login', ['ref' => $request->path()]);
        }

        return $next($request);
    }
}
