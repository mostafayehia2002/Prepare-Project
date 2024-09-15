<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class AutoCheckPermission
{

    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();
        $permission = Permission::whereRaw("FIND_IN_SET('$routeName',routes)")->first();
        if ($permission) {
            if (!request()->user()->can($permission->name)) {
                abort(403);
            }
        }
        return $next($request);
    }
}
