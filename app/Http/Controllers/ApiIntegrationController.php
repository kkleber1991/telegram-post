<?php

namespace App\Http\Controllers;

use App\Models\EtsyCredential;
use App\Models\MercadoLivreCredential;
use Illuminate\Http\Request;

class ApiIntegrationController extends Controller
{
    public function index()
    {
        $mercadoLivreCredential = auth()->user()->mercadoLivreCredential;
        $etsyCredential = auth()->user()->etsyCredential;
        
        return view('api-integration', compact('mercadoLivreCredential', 'etsyCredential'));
    }

    public function storeMercadoLivre(Request $request)
    {
        $validated = $request->validate([
            'app_id' => 'required|string',
            'client_secret' => 'required|string',
        ]);

        $credentials = MercadoLivreCredential::updateOrCreate(
            ['user_id' => auth()->id()],
            $validated
        );

        return back()->with('status', 'Mercado Livre credentials saved successfully!');
    }

    public function storeEtsy(Request $request)
    {
        $validated = $request->validate([
            'api_key' => 'required|string',
        ]);

        $credentials = EtsyCredential::updateOrCreate(
            ['user_id' => auth()->id()],
            $validated
        );

        return back()->with('status', 'Etsy credentials saved successfully!');
    }
} 