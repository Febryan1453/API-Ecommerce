<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProdukController extends Controller
{
    public function getProduk()
    {
        $produk = Produk::all();
        return response()->json([
            'status'    => 1,
            'message'   => "Get data produk berhasil",
            'produk'      => $produk
        ], Response::HTTP_OK);
    }
}
