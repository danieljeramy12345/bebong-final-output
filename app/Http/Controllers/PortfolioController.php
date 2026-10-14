<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function profile(): View
    {
        return view('profile');
    }

    public function details(): View
    {
        return view('details');
    }

    public function contacts(): View
    {
        return view('contacts');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        return to_route('contacts')
            ->with('success', 'Your message passed validation.')
            ->with('contact_name', $validated['name']);
    }
}
