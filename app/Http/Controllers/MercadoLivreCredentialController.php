<?php

namespace App\Http\Controllers;

use App\Models\MercadoLivreCredential;
use Illuminate\Http\Request;

class MercadoLivreCredentialController extends Controller
{
    public function index()
    {
        $credentials = auth()->user()->mercadoLivreCredential;
        return view('mercadolivre.credentials', compact('credentials'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'app_id' => 'required|string',
            'client_secret' => 'required|string',
            'redirect_uri' => 'nullable|url',
        ]);

        $credentials = MercadoLivreCredential::updateOrCreate(
            ['user_id' => auth()->id()],
            $validated
        );

        return redirect()->route('mercadolivre.credentials')->with('status', 'Credentials saved successfully!');
    }
} 