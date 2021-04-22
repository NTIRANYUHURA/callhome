<?php
//phpcs:disable
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceTelecomMadeByYves;

class PriceTelecomMadeByYvesController extends Controller
{
    //
    function show(PriceTelecomMadeByYves $priceTelecomMadeByYves)
    {
        return view('priceTelecomMadeByYves.show', compact('priceTelecomMadeByYves'));
    }
}
