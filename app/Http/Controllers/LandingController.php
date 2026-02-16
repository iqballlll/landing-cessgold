<?php

namespace App\Http\Controllers;

use App\Models\GoldPriceDay;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $goldTodays = GoldPriceDay::with([
            'items' => function ($q) {
                $q->orderBy('weight', 'asc');
            }
        ])
            ->where('type', 'general')
            ->where('status', 1)
            ->first();
        return view('landing', ['golds' => $goldTodays]);
    }
}
