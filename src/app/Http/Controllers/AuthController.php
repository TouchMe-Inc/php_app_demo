<?php

namespace App\Http\Controllers;

use App\Services\AuthService;

class AuthController
{
    private AuthService $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    public function signIn(): string
    {
        return $this->authService->signIn();
    }

    public function signUp(): string
    {
        return $this->authService->signUp();
    }
}