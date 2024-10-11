<?php

namespace App\Controllers;

use App\Services\AuthService;
use App\Views\View;
use Core\Request\Request;

class AuthController
{
    private AuthService $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    public function signIn(): string
    {
        /** @var Request $request */
        $request = container()->make(Request::class);

        $dumbPOST = $request->getPost();

        print_r($dumbPOST);

        return View::layout("base", [
            "slot" => View::page("auth/signin")
        ]);
    }

    public function signUp(): string
    {
        return View::layout("base", [
            "slot" => View::page("auth/signup")
        ]);
    }

    public function signOut(): string
    {
        return $this->authService->signOut();
    }
}