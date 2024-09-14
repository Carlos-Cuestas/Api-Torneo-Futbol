<?php

namespace App\Http\Controllers;

use App\Models\Matcht;
use Illuminate\Http\Request;

class MatchtController extends Controller
{
    public function index()
    {
        return Matcht::all();
    }

    public function store(Request $request)
    {
        $match = Matcht::create($request->all());
        return response()->json($match, 201);
    }

    public function show($id)
    {
        $match = Matcht::findOrFail($id);
        return response()->json($match);
    }

    public function update(Request $request, $id)
    {
        $match = Matcht::findOrFail($id);
        $match->update($request->all());
        return response()->json($match, 200);
    }

    public function destroy($id)
    {
        Matcht::destroy($id);
        return response()->json(null, 204);
    }
}
