<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
<<<<<<< HEAD
    public function handle(Request $request, Closure $next, string ...$roles): Response
=======
   public function handle(Request $request, Closure $next, string ...$roles): Response
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
    {
        $user = $request->user();

        if (! $user || ! in_array($user->role, $roles)) {
            return response()->json([
                'message' => 'Forbidden. You do not have permission to perform this action.',
            ], 403);
        }

        return $next($request);
    }
}
