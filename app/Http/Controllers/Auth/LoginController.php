<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('site.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Credenciais Inválidas',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('site.index'));
    }
}
